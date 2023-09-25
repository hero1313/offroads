<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CkeditorController;
use Illuminate\Support\Facades\Route;


Route::get('/admin',function(){
    return redirect('login');
});



// redirect
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[StudentController::class, 'index_main']);
Route::get('subscribes',[Studentcontroller::class , 'sub']);
Route::get('contact',[Studentcontroller::class , 'contact']);
Route::post('subscribes',[Studentcontroller::class , 'subs']);
Route::get('all_products',[StudentController::class, 'show']);
Route::get('detail/{id}',[StudentController::class, 'detailsa']);
Route::get('search',[StudentController::class, 'search']);
Route::get('about',[StudentController::class, 'about']);
Route::get('category/{id}',[StudentController::class, 'category']);
Route::post('search',[StudentController::class, 'search']);
// admin
Route::group(['middleware'=> ['auth:sanctum','verified']], function () { 
Route::get('/adminpanel',[StudentController::class, 'index']);
Route::get('add-products',[StudentController::class, 'create']);
Route::post('add-products',[StudentController::class, 'store']);
Route::get('add-category',[StudentController::class, 'create_category']);
Route::post('add-category',[StudentController::class, 'store_category']);
Route::get('edit-product/{id}',[StudentController::class, 'edit']);
Route::put('update-product/{id}',[StudentController::class, 'update']);
Route::delete('delete-product/{id}',[StudentController::class, 'destroy']);
Route::delete('delete-category/{id}',[StudentController::class, 'destroy_category']);
Route::get('category-page',[StudentController::class, 'categories']);
// admin-end

});