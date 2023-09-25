
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
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>OFFROADS HOBBY</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>კატეგორიები</h2>
            </div>
            <div class="swiper mySwiper12">
              <div class="swiper-wrapper">


                @foreach($categories as $category)
                <div class="swiper-slide">
                  <a href="category/{{$category['id']}}">
                    <div style="background-image:url('../uploads/products/{{$category->category_photo}}');" class="category-box">
                      <h6 class="category-title" style="width:100%; height:auto">
                        {{$category->category_name}}
                      </h6>
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

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>პოპულარული პროდუქტები</h2>
              <a href="../all_products">ყველა პროდუქტი <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach ($main_product as $products)
          <div class="col-md-4">
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

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>OffroadsHobby-ის შესახებ</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>საუკეთესო პროდუქცია საუკეთესო ფასად</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">აქ რასაც გვინდა დავწერთ</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <a href="../about" class="filled-button">მეტის წაკითხვა</a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/main.js"></script>
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
