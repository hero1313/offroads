
 
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card-header">
                <h4>sabarguli.ge  პროდუქტები</h4>
                <a href="{{url('add-products')}}" class="btn btn-primary folat-end">დაამატე პროდუქტი</a>
                <a href="{{url('add-category')}}" class="btn btn-primary folat-end">კატეგორიის დამატება</a>
                <a href="{{url('category-page')}}" class="btn btn-primary folat-end">კატეგორიების მართვა</a>
            </div>

        
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ფოტო</th>
                    <th scope="col">სახელი</th>
                    <th scope="col">წაშლა</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $cat)
                        <tr>
                            <td><div style="background-image:url('../uploads/products/{{$cat->category_photo}}');" class="category-box-img"></td>
                            <td>{{$cat->category_name}}</td>
                            <td>
                                <form action="{{url('delete-category/'.$cat->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                             </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
    .category-box-img{
	height: 100px;
	width: 100px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
    }
</style>