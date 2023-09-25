
    

       

      
        



   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<style>
    .filter-group{
        font-size:18px;
    }
    .rasa{
        
        margin:0 auto;
    }
    .footer .box-container .box a {
    display: block;
    font-size: 1.4rem;
    color: var(--light-color);
    padding: 1rem 0;
    text-decoration: none;
}
    .product-image{
        height:200px;
        width:auto;
    }
    .blocks{
        display:block;
        padding-top:0px;
        padding-bottom:0px;
    }
    .header .header-2 .blocks a {
    color: #fff;
    display: inline-block;
    padding: 1.2rem;
    font-size: 1.7rem;
    text-decoration: none;
}
.filter-submit{
    padding:8px 15px;
    margin-top:20px;
    font-size:15px;
    border-radius:5px
}

@media only screen and (min-width: 900px) {
    .bootstrap_cards2{
        min-height:600px;
    }
}
</style>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

    <a href="/" class="logo"><img  src="image/logo.png" class="logo1" alt="">
         
    </a>
    <div class="col-sm-1 col-md-1  col-1 hidden-nav ">
           <i id="mainbox" onclick="openFunction()" class="fas fa-bars  nav-icon d-xl-none d-lg-none d-xl-block  "></i>
       </div>
        <form action="/search" class="search-form  ">
            <input type="search" name="query" placeholder="ძებნა" id="search-box">
            <button for="search-box" class="search-btn" type="submit"><i class="fas fa-search"></i></input>
            
        </form>
        <div class="icons">
      
        
            
            <div style="opacity: 0;" id="login-btn" class="fas fa-user"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </div>
     
    </div>
    <div id="menu" class="sidemenu">

        <header class="navbar-header">
            <form action="/search" class="search-form search12 ">
            <input type="search" class="hid-txt" name="query" placeholder="ძებნა" id="search-box">
            <button for="search-box" class=""c type="submit"><i class="fas fa-search search-icon"></i></input>
            
        </form>
  <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>

</header>
<ul class="hid-ul">
      <li class="hid-li">
          <a class="hid-a" href="/">მთავარი</a>
         
      </li>
      <li class="hid-li">
      <a class="hid-a" href="/misabmeli">მისაბმელი</a>
          
      </li>
      <li class="hid-li">
      <a class="hid-a" href="/products-page">ნაწილები</a>
          
      </li>
      <li class="hid-li">
      <a class="hid-a" href="/about">ჩვენს შესახებ</a>
          
      </li>
      <li class="hid-li">
      <a class="hid-a" href="/contact">კონტაქტი</a>
          
      </li>
      <li class="hid-li">
          <a class="hid-a" href="#blogs">ბლოგი</a>
          
      </li>

</ul>

 
  



 
 
</div>


    <div class="header-2">
        
        <nav class="navbar blocks-s" >
            <a href="/">მთავარი</a>
            <a href="/misabmeli">მისაბმელები</a>
            <a href="/products-page">ნაწილები</a>
            <a href="/about">ჩვენ შესახებ</a>
            <a  href="/contact">კონტაქტი</a>
            <a href="#blogs">ბლოგი</a>
        </nav>
    </div>
</header>

<br>


<div class="bootstrap_cards2">
<div class="row py-5">
    <div class="row col-12 col-sm-4 col-lg-2 rasa">
        <form action="">
            
           <div class="form-group filter-group">
                <input class="filter-input"  name="cat_1" type="checkbox">
                <label for="ceckbox">საბურავები </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_2" type="checkbox">
                <label for="ceckbox">ჯალამბარი </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_3" type="checkbox">
                <label for="ceckbox">კაპლერები </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_4" type="checkbox">
                <label for="ceckbox">დამხმარე ბორბლები </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_5" type="checkbox">
                <label for="ceckbox">საბუქსირე </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_6" type="checkbox">
                <label for="ceckbox">მისაბმელი </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_7" type="checkbox">
                <label for="ceckbox">პინები და კლიპები</label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_8" type="checkbox">
                <label for="ceckbox">ბურთულები </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_9" type="checkbox">
                <label for="ceckbox">საბუქსიერე მიმღები  </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_10" type="checkbox">
                <label for="ceckbox">სტაბილიზერი </label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_11" type="checkbox">
                <label for="ceckbox">ელექტროობა</label>
           </div>
           <div class="form-group filter-group">
                <input  name="cat_12" type="checkbox">
                <label for="ceckbox">ფარები და ნათურები </label>
           </div>
          
           <button class="filter-submit" type="submit">გაფილტვრა</button>
            
        </form>
    </div>
    <!-- For Demo Purpose-->
    <div class="col-12 col-sm-8 col-lg-10  row pb-5 mb-4">
    @foreach($product as $item)

   
   <div class="col-lg-3 col-md-6 mb-4 ">
            <!-- Card-->
            
            <a href="detail/{{$item['id']}}"><div class="card rounded shadow-sm border-0">
                <div class="card-body p-4"><img src="{{ asset('uploads/products/'.$item->profile_image)}}" alt="" class=" product-image img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">{{$item->name}}</a></h5>
                    <div style="display:flex;"  class="small flex text-muted font-italic"><h6 id="old" class="old">{{$item->price}}</h6> <h6 id="new" class="new">{{$item->discount_price}}</h6> <h6 class="news1"> ლარი</h6></div>
                    
                   
                </div>
            </div></a>
        </div>
                 
      
 @endforeach
       
        
    </div>

    
    <!-- Second Row [Team]-->
    
  </div>
</div>

<br>
<section class="footer">

    <div class="box-container">

    <div  class="box">
            <form action="{{url('subscribes')}}"method="POST" >
            @csrf
            <h3 class="subs">გამოგზავნეთ თქვენი მეილი რომ არ გამოგრჩეთ სიახლეები</h3>
            <input type="email" class="email-input" name="email" placeholder="შეიყვანეთ მეილი" id="" class="box"><br>
            <input type="submit" value="გაგზავნა" class="btn">
            </form>
        </div>
        <div class="box">
            <h3>ნავიგაცია</h3>
            <a href="/"> <i class="fas fa-arrow-right"></i> მთავარი </a>
            <a href="/misabmeli"> <i class="fas fa-arrow-right"></i> მისაბმელი </a>
            <a href="/products-page"> <i class="fas fa-arrow-right"></i> ნაწილები </a>
            <a href="/about"> <i class="fas fa-arrow-right"></i> ჩვენ შესახებ </a>
            <a href="/contact"> <i class="fas fa-arrow-right"></i> კონტაქტი </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> ბლოგი </a>
        </div>

        

        <div class="box">
            <h3>საკონტაქტო ინფორმაცია</h3>
            <a href="#"> <i class="fas fa-phone"></i>032 2 420 710</a>
            <a href="#"> <i class="fas fa-envelope"></i>info@sabarguli.ge</a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d744.510683484628!2d44.802147729238015!3d41.71959669971705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa7fd0e663bbc9b0f!2zNDHCsDQzJzEwLjUiTiA0NMKwNDgnMDkuNyJF!5e0!3m2!1sen!2sge!4v1643009899749!5m2!1sen!2sge" class="map" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>nika</span> | all rights reserved! </div>

</section>



<!-- footer section ends -->

<!-- loader  -->





<script type="text/javascript">

</script>












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="assets/js/script.js"></script>
<script>
    $('.new').each(function(){
  if ($(this).is(':empty')) {
    $(this).prev().css({"color": "#6c757d", "text-decoration": "none"});
  }else{
    $(this).prev().css({"color": "red", "text-decoration": "line-through","margin-right":"5px"});
  }
});


</script>
<script type="text/javascript">
        function openFunction(){
            document.getElementById("menu").style.width="300px"
        }
        function closeFunction(){
            document.getElementById("menu").style.width="0px"
        }

     
      
    
</script>


</body>

<style>
    
</style>
</html>

