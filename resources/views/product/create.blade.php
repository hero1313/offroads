
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>

            @endif
            <div class="card-header">
                <h4>crud</h4>
                <a href="{{url('adminpanel')}}" class="btn btn-primary folat-end">back</a>
            </div>

            <div class="cart-body">
            <form action="{{ url('add-products') }}" method="POST" enctype= multipart/form-data>
                @csrf
                <div class="mb-3">
                    <label  class="form-label">დასახელება</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">ფასი</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">დესქრიფშენი</label>
                    <input type="text" name="description" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">გამოჩნდეს მთავარ გვერდზე</label>
                    <select name="main_product" class="form-control" id="exampleFormControlSelect1">
                    <option value="არა">არა</option>
                    <option value="დიახ">დიახ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">კატეგორიები</label>
                    <select class="form-select" name="category"  aria-label="Default select example">                    
                        @foreach ($category as $cat)
                            <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- <div class="mb-3">
                    <label  class="form-label">discount price</label>
                    <input type="number" name="discount_price" class="form-control">
                </div> -->
                <div class="mb-3">
                    <label  class="form-label">მთავარი სურათი</label>
                    <input type="file" name="profile_image"  class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">დამატებითი სურათები</label>
                    <input type="file" name="image[]" multiple class="form-control">
                </div>
                
              
            <button type="submit" class="btn btn-primary">ატვირთვა</button>
            </form>



            
            
            </div>
        </div>
    </div>

  




    
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
