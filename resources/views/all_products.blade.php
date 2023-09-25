@include('layouts.head')
@include('layouts.header')

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->


    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>პროდუქტები</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>

                  <li class="active კატეგორია" data-filter="*">ყველა პროდუქტი</li>
                  @foreach ($category as $cat)
                   <li data-filter=".{{$cat->category_name}}">{{$cat->category_name}}</li>
                  @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">

                @foreach ($product as $products)
                <div class="col-lg-4 col-md-4 all {{$products->category}}">
                  <a href="detail/{{$products['id']}}">
                      <div class="product-item">
                        <img src="../uploads/products/{{$products->profile_image}}" alt="">
                        <div class="down-content">
                          <h4>{{$products->name}}</h4>
                          <h6>{{$products->price}} ₾</h6>
                          <p class="main_desc" >{{$products->description}}</p>
                        </div>
                      </div>  
                  </a>
                </div>
                @endforeach

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @include('layouts.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
