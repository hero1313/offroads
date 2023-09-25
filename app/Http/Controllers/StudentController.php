<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\User;
use App\Models\Subscribes;
use App\Models\Multiple;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class StudentController extends Controller
{



    // 
    public function index(){
        $product = Student::all();
        return view('product.add-product',compact('product'));
    }
    public function index_main(){
        // abort(404, 'Page not found');

        $main_product = Student::all()->where('main_product', '=', 'დიახ');
        $categories = category::all()->where('category_photo', '!=', null);
        return view('main', compact(['main_product','categories']));
    }

    public function category($id){
        $category_id= Category::find($id);
        $product= Student::all()->where('category', '=', $category_id->category_name);
        $category= Category::all();
        return view('categories', compact(['product', 'category',]));
    }
    // public function sub(){
       
    //     return view('main');
    // }
    public function contact(){
       
        return view('contact');
    }


    public function subs(Request $request){
        $subscribes = new Subscribes;
        $subscribes ->username = $request->input('username');
        $subscribes ->email = $request->input('email');
        $subscribes ->subscribe_subject = $request->input('subscribe_subject');
        $subscribes ->text = $request->input('text');
        $subscribes->save();

        return redirect()->back();
    }

  
    public function show(Request $request){
        $product = Student::orderBy('id','DESC')->get();
        $category= Category::all();
        return view('all_products',compact('product','category'));
        
    }


    public function categories(){
        $categories= Category::all();
        return view('product.categories',compact('categories'));
        
    }

    public function misabmeli(){
        $product = Student::all()->where('category', '=', 6);
        return view('product.misabmeli',compact('product'));
    }
    public function create(){
        $category= Category::all();
        return view('product.create',compact('category'));
    }
    
    public function edit($id){
        $product= Student::find($id);
        $category= Category::all();
        return view('product.edit',compact('product','category'));
    }

    public function destroy($id){
        $product= Student::find($id);
        $destination='uploads/products/'.$product->profile_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $product->delete();
        return redirect()->back()->with('status','product image added');
    }


    public function destroy_category($id){
        $category = Category::find($id);
        $destination='uploads/products/'.$category->category_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $category->delete();
        return redirect()->back()->with('status','category deleted');
    }
   
    public function update(Request $request ,$id){
        $product = Student::find($id);
        $product ->name = $request->input('name');
        $product ->main_product = $request->input('main_product');
        $product ->discount = $request->input('discount');
        $product ->discount_price = $request->input('discount_price');;
        $product ->price = $request->input('price');
        $product ->description = $request->input('description');
        $product ->category = $request->input('category');
        if($request->hasfile('profile_image')){
            $destination='uploads/products/'.$product->profle_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $product->profile_image = "$filename";
        }
       
        $image = array();

        if($files = $request->file('image')){
            foreach($files as $file){

                $image_name=md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='multiple_image/';
                $image_url=$upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[]=$image_url;
            }
           
        }
        Multiple::insert([
            'image'=> implode('|',$image),
            'prod_id'=>$id
        ]);


        
        $product->update();

        return redirect()->back()->with('status','product image added');
    }

    public function detailsa($id){
        $product= Student::find($id);
        $relative = Student::all()->where('category', '=', $product->category);
        $image = DB::table('multiple_image')->orderBy('id', 'desc')->where('prod_id',$product->id)->first();
        $images = explode('|',$image->image);
        // $images = Multiple::all()->where('prod_id', '=', $product->id);
        return view('product_details', compact(['product', 'relative','images']));
    }

    public function paypal($id){
        $product= Student::find($id);
        return view('paypal',compact('product'));
    }

    public function about(){
       
        return view('about');
    }
    public function search(Request $req){
    $category= Category::all();
      $search = Student::where('name','like','%'.$req->input('search').'%')
      ->get();
      return view('search',compact('search','category'));
    }

        
    
    public function store(Request $request){        
        $product = new Student;
        $product ->name = $request->input('name');
        $product ->price = $request->input('price');
        $product ->discount = $request->input('discount');
        $product ->main_product = $request->input('main_product');
        $product ->discount_price =$request->input('discount_price') ;
        $product ->description = $request->input('description');
        $product ->category = $request->input('category');
        $category= category::all()->where('category_name', '=', $request->input('category'));
        // $product ->dicount = $request->input('discount');
        if($request->hasfile('profile_image')){
            $file =$request->file('profile_image');
            $extention =$file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $product->profile_image = "$filename";
        }
        $product->save();

        $image=array();
        $last_product = DB::table('students')->latest()->pluck('id')->first();
        if($files = $request->file('image')){
            foreach($files as $file){
                $image_name=md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='multiple_image/';
                $image_url=$upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[]=$image_url;
            }
           
        }
        Multiple::insert([
            'image'=> implode('|',$image),
            'prod_id'=>$last_product
        ]);

        echo $product->id;
        return back();
    }
    public function create_category(){
        return view('product.create_category');
    }
    public function store_category(Request $request){        
        $category = new Category;
        $category ->category_name = $request->input('category_name');
        if($request->hasfile('category_photo')){
            $file =$request->file('category_photo');
            $extention =$file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $category->category_photo = "$filename";
        }
        $category->save();
        return back();
   
    }

}
