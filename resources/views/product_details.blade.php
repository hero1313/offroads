<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <title>OFFROADHOBBY</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
  </head>
@include('../layouts.header')

  <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    
    <div class="container cont">
        <div class="row">
            <div class="col-12 col-md-7">
            <div class="swiper mySwiper-details">
            <div class="swiper-wrapper ideal">
                <div class="swiper-slide details-img" style="background-image:url({{ asset('uploads/products/'.$product->profile_image)}})" alt=""></div>
                @foreach ($images as $items)
                    <div class="swiper-slide details-img" style="background-image:url({{URL::to($items)}})" alt=""></div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="desc">
                    <div class="category-btn">
                    {{$product->category}}
                    </div>
                    <h4 class="details-title">{{$product->name}}</h4>
                    <h4 class="details-price">{{$product->price}} ₾</h4>
                    <h6 class="details-description">{{$product->description}}</h6>

                </div>
            </div>
        </div>
    </div>   
<div class="container">
<div class="swiper mySwiper13">
    <h1 class="heading"> <a href="/misabmeli"> <span>მსგავსი პროდუქტები</span></a> </h1>
      <div class="swiper-wrapper tesa">
      @foreach($relative as $item)
  

        <div class="swiper-slide">
            <a href="../detail/{{$item->id}}">
              <div class="product-item">
                <img src="../uploads/products/{{$item->profile_image}}" alt="">
                <div class="down-content">
                  <h4 class="tit">{{$item->name}}</h4>
                  <h6>{{$item->price}} ₾</h6>
                  <p class="main_desc" >{{$item->description}}</p>
                </div>
              </div>
            </a>
          </div>

   
    @endforeach 

        
      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
</div>
    
</div>

    
    @include('../layouts.footer')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper-details", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

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
    <script>
      var swiper = new Swiper(".mySwiper13", {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

  </body>

</html>
