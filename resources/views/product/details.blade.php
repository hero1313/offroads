@php
  
   $cat = "122";

@endphp

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

</head>
<style>

    
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');
        .card{
            margin-top:-400px;
        }
        
        .youtube-video{
            
            width:max-content;
            
        }
        .tesa{
            margin-top:20px;
        }
        .lase{
            height:480px;
        }
        .cardest{
            
            margin:50px auto;
        }
        
        .card-wrapper{
            max-width: 1100px;
            margin: 0 auto;
        }
        .cardes{
            min-height:299px;
             height:380px;      }
        .details-img{
            background-size:cover;
            
            margin:0 auto;
            display: block;
        }
        .img-display{
            overflow: hidden;
        }
        .img-showcase{
            display: flex;
        
            transition: all 0.5s ease;
        }
       
        .img-select{
            display: flex;
        }
        .img-item{
            margin: 0.3rem;
        }
        .img-item:nth-child(1),
        .img-item:nth-child(2),
        .img-item:nth-child(3){
            margin-right: 0;
        }
        .img-item:hover{
            opacity: 0.8;
        }
        .product-content{
            padding: 2rem 1rem;
        }
        .about{
            margin-top: 30px;
        }
        .desc{
            font-size: 15px !important;
            color: #12263a;
            margin-bottom:20px;
        }
        .product-title{
            font-size: 3rem;
            text-transform: capitalize;
            font-weight: 700;
            position: relative;
            color: #12263a;
            margin: 1rem 0;
        }
        .product-title::after{
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            height: 4px;
            width: 80px;
            background: #12263a;
        }
        .product-link{
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 0.5rem;
            background: #256eff;
            color: #fff;
            padding: 0 0.3rem;
            transition: all 0.5s ease;
        }
        .product-link:hover{
            opacity: 0.9;
        }
        .product-rating{
            color: #ffc107;
        }
        .product-rating span{
            font-weight: 600;
            color: #252525;
        }
        .product-price{
            margin: 1rem 0;
            font-size: 1rem;
            font-weight: 700;
        }
        .product-price span{
            font-weight: 400;
        }
        .last-price span{
            color: #f64749;
            text-decoration: line-through;
        }
        .new-price span{
            color: #256eff;
        }
        .product-detail h2{
            text-transform: capitalize;
            color: #12263a;
            padding-bottom: 0.6rem;
        }
        .product-detail p{
            font-size: 0.9rem;
            padding: 0.3rem;
            opacity: 0.8;
        }
        .product-detail ul{
            margin: 1rem 0;
            font-size: 0.9rem;
        }
        .product-detail ul li{
            margin: 0;
            list-style: none;
            background: url(shoes_images/checked.png) left center no-repeat;
            background-size: 18px;
            padding-left: 1.7rem;
            margin: 0.4rem 0;
            font-weight: 600;
            opacity: 0.9;
        }
        .product-detail ul li span{
            font-weight: 400;
        }
        .purchase-info{
            margin: 1.5rem 0;
        }
        .purchase-info input,
        .purchase-info .btn{
            border: 1.5px solid #ddd;
            border-radius: 25px;
            text-align: center;
            padding: 0.45rem 0.8rem;
            outline: 0;
            margin-right: 0.2rem;
            margin-bottom: 1rem;
        }
        .purchase-info input{
            width: 60px;
        }
        .mySwiper11{
            margin-top:20px;
        }
        .swiper-slide iframe{
            width:100% !important;
            height:100% !important;
        }
        .main-youtube iframe{
            width:100% !important;
            height:400px !important;
        }
        
        .wid {
            width: 100% !important;
        }
        .purchase-info .btn{
            cursor: pointer;
            color: #fff;
        }
        .purchase-info .btn:first-of-type{
            background: #256eff;
        }
        .purchase-info .btn:last-of-type{
            background: #f64749;
        }
        .purchase-info .btn:hover{
            opacity: 0.9;
        }
        .social-links{
            display: flex;
            align-items: center;
        }
        .social-links a{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            color: #000;
            border: 1px solid #000;
            margin: 0 0.2rem;
            border-radius: 50%;
            text-decoration: none;
            font-size: 0.8rem;
            transition: all 0.5s ease;
        }
        .social-links a:hover{
            background: #000;
            border-color: transparent;
            color: #fff;
        }

        @media screen and (min-width: 692px){
            .card{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 1.5rem;
            }
            .card-wrapper{
                margin-top: 450px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .cardest{
                
            width:75%;
            margin:50px auto;
        
            }
            .product-imgs{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .product-content{
                padding-top: 0;
            }
        }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

        :root{
            --green:#27ae60;
            --dark-color:#219150;
            --black:#444;
            --light-color:#666;
            --border:.1rem solid rgba(0,0,0,.1);
            --border-hover:.1rem solid var(--black);
            --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
        }

        *{
            font-family: 'Poppins', sans-serif;
            margin:0; padding:0;
            box-sizing: border-box;
            outline: none; border:none;
            text-decoration: none;
            text-transform: capitalize;
            transition:all .2s linear;
            transition:width none;
        }

        html{
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 5rem;
            scroll-behavior: smooth;
        }

        html::-webkit-scrollbar{
            width:1rem;
        }

        html::-webkit-scrollbar-track{
            background:transparent;
        }

        html::-webkit-scrollbar-thumb{
            background:var(--black);
        }

        section{
            padding:5rem 9%;
        }

        .heading{
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .heading::before{
            content: '';
            position: absolute;
            top:50%; left:0;
            transform: translateY(-50%);
            width: 100%;
            height:.01rem;
            background: rgba(0,0,0,.1);
            z-index: -1;
        }

        .heading span{
            font-size: 3rem;
            padding:.5rem 2rem;
            color:var(--black);
            background: #fff;
            border:var(--border);
        }

        .btn{
            margin-top: 1rem;
            display:inline-block;
            padding:.9rem 3rem;
            border-radius: .5rem;
            color:#fff;
            background:var(--green);
            font-size: 1.7rem;
            cursor: pointer;
            font-weight: 500;
        }

        .btn:hover{
            background:var(--dark-color);
        }

        .header .header-1{
            background:#fff;
            padding:1.5rem 9%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .header-1 .logo{
            font-size: 2.5rem;
            font-weight: bolder;
            color:var(--black);
        }

        .header .header-1 .logo i{
            color:var(--green);
        }

        .header .header-1 .search-form{
            width:50rem;
            height:5rem;
            border:var(--border);
            overflow: hidden;
            background:#fff;
            display:flex;
            align-items: center;
            border-radius: .5rem;
        }

        .header .header-1 .search-form input{
            font-size: 1.6rem;
            padding:0 1.2rem;
            height:100%;
            width:100%;
            text-transform: none;
            color:var(--black);
        }

        .header .header-1 .search-form label{
            font-size: 2.5rem;
            padding-right: 1.5rem;
            color:var(--black);
            cursor: pointer;
        }
        .subs{
            color: #3C403D !important;
        }

        .header .header-1 .search-form label:hover{
            color:var(--green);
        }

        .header .header-1 .icons div,
        .header .header-1 .icons a{
            font-size: 2.5rem;
            margin-left: 1.5rem;
            color:var(--black);
            cursor: pointer;
        }
        .first-img{
            width:160px  !important;
            height:auto !important;
            margin-bottom: -30px;
        }
        .email-input{
            height: 40px !important;
            width: 80% !important;
            border: 1px solid grey !important;
            border-radius: 10px !important;
            padding-left: 15px !important;
            margin-top: 10px;
            margin-bottom: 10px;
        }


        .header .header-1 .icons div:hover,
        .header .header-1 .icons a:hover{
            color:var(--green);
        }
        .search-btn{
            height: 100%;
    width: 50px;
    font-size: 20px;
    padding-top: 13px;
        }
        #search-btn{
            display: none;
        }
        .flex{
            display: flex;
        }


        .header .header-2{
            background:var(--green);
        }
        .new , .old{
            font-size: 17px;
        }

        .header .header-2 .navbar{
            text-align: center;
        }
        .main-small{
            width: max-content;
            margin: 0 auto;
            font-size: 17px;
        }
        #old , #new{
            color: #6c757d ;
        }
        .small{
            font-size: 17px;
            color: #6c757d ;
        }
        .text-dark{
            text-decoration: none;
            font-size: 20px;
        }

        .header .header-2 .navbar a{
            color:#fff;
            display: inline-block;
            padding:1.2rem;
            font-size: 1.7rem;
        }
        .news{
            font-size: 17px;
        }
        .fas,h3,span{
            color:#3C403D  !important;
        }
        .header-2{
            background-color:#3C403D !important ;
        }
        .header .header-2 .navbar a {
            color: #fff;
            display: inline-block;
            padding: 1.2rem;
            font-size: 1.7rem;
            text-decoration: none;
        }
        .blocks-s{
            padding:0px;
            width: max-content;
            margin: 0 auto;
            text-decoration: none;
        }
        a{
            text-decoration: none;
        }
        .navbar{
            background-color: #3C403D !important;
        }
        .header .header-2 .navbar a:hover{
            background:var(--dark-color);
        }
        .btn{
            background-color: #3C403D !important;
        }

        .header .header-2.active{
            position:fixed;
            top:0; left:0; right:0;
            z-index: 1000;

        }

        .bottom-navbar{
            display: none !important;
            text-align: center;
            background:var(--green);
            position: fixed;
            bottom:0; left:0; right:0;
            z-index: 1000;
            display: none;
        }

        .bottom-navbar a{
            font-size: 2.5rem;
            padding:2rem;
            color:#fff;
        }

        .navbar a:hover{
            color:#3C403D !important ;
            background-color: #fff !important;
        }
        .fab{
            background-color:#3C403D !important ;
        }

        .login-form-container{
            display: flex;
            align-items: center;
            justify-content: center;
            background:rgba(255,255,255,.9);
            position:fixed;
            top:0; right:-105%;
            z-index: 10000;
            height:100%;
            width:100%;
        }

        .login-form-container.active{
            right:0;
        }

        .login-form-container form{
            background:#fff;
            border:var(--border);
            width:40rem;
            padding:2rem;
            box-shadow: var(--box-shadow);
            border-radius: .5rem;
            margin:2rem;
        }

        .login-form-container form h3{
            font-size: 2.5rem;
            text-transform: uppercase;
            color:var(--black);
            text-align: center;
        }

        .login-form-container form span{
            display: block;
            font-size: 1.5rem;
            padding-top: 1rem;
        }

        .login-form-container form .box{
            width: 100%;
            margin:.7rem 0;
            font-size: 1.6rem;
            border:var(--border);
            border-radius: .5rem;
            padding:1rem 1.2rem;
            color:var(--black);
            text-transform: none;
        }

        .login-form-container form .checkbox{
            display:flex;
            align-items: center;
            gap:.5rem;
            padding:1rem 0;
        }

        .login-form-container form .checkbox label{
            font-size: 1.5rem;
            color:var(--light-color);
            cursor: pointer;
        }

        .login-form-container form .btn{
            text-align: center;
            width:100%;
            margin:1.5rem 0;
        }

        .login-form-container form p{
            padding-top: .8rem;
            color:var(--light-color);
            font-size: 1.5rem;
        }

        .login-form-container form p a{
            color:var(--green);
            text-decoration: underline;
        }

        .login-form-container #close-login-btn{
            position: absolute;
            top:1.5rem; right:2.5rem;
            font-size: 5rem;
            color:var(--black);
            cursor: pointer;
        }

        .home{
            
            background-size: cover;
            background-position: center;
        }
        /* side menu */
            .hidden-nav{
                display: none;
            }
            @media only screen and (max-width: 768px) {

                .search-form{
                display: none !important;
                }
                .hidden-nav{
                    display: block;
                }
            }
            .sidemenu{
                position:fixed;
                top: 0px;
                right: 0px;
                height: 100%;
                width: 0px;
                background-color:#3C403D !important;
                z-index:4;
                padding-top: 0px;
                overflow-x: hidden;
                -webkit-transition: all .5s;
                -o-transition: all .5s;
                transition: all .5s;
            
            }
            .sidemenu a{
                padding: 8px 8px 8px 64px;
                text-decoration: none;
                font-size: 20px;
                display: block;
                color: white;
            }
            .sidemenu a :hover{
                color: white;
            }
            
            .sidemenu .closebtn{
                position: absolute;
                height: 10px !important;
                top: 5px;
                right: 5px;
                font-size: 36px;
                margin-left: 32px;
                color: white;
            }
            #mainbox{
                font-size: 24px;
                cursor: pointer;
                -webkit-transition: all .6s;
                -o-transition: all .6s;
                transition: all .6s;
            
            }
            .navbar-icon{
                
                margin-top: 5px;
                
            }
            
            /* @media only screen and (max-width: 700px) {
                .navbar-icon{
                    display: block;
                }
                
                .last-div{
                    display: none;
                }
                } */
            
            .navbar-header h2{
                color:#ffffff ;
                text-align: center;
                margin-top: 10px;
                font-size: 20px;
                font-weight: 300;
            }

            .search12{
                display: block !important;
            }
            .hid-txt{
                margin-top: 20px;
                height: 35px;
                /* margin-top: 1px; */
                margin-left: 20px;
                width: 215px;
                padding-left: 10px;
            }
            .search-icon{

                position: absolute;
                
                left: 210px;
                font-size: 20px;
                top: 40px;
                margin-top: -11px;
            }
            .hid-li{
                text-align: center;
                list-style-type:none ;
                color: #fff;
                font-size: 18px;
                margin-top: 20px;
                font-weight: bold;
                padding: 10px 0;
                transition: 0.3s;
            }
            .hid-ul{
                margin-right: 10px;
            }
            .hid-a:hover{
                background-color: #fff;
                color:#3C403D ;
            }
            .hid-a{
                text-align: center;
                list-style-type:none ;
                color: #fff;
                font-size: 18px;
                
                font-weight: bold;
            
                transition: 0.3s;
                padding-left: 10px !important;
            }
            

                    .home .row{
                        display:flex;
                        align-items: center;
                        flex-wrap: wrap;
                        gap:1.5rem;
                    }

                    .home .row .content{
                        flex:1 1 42rem;
                    }

                    .home .row .books-slider{
                        flex:1 1 42rem;
                        text-align: center;
                        margin-top: 2rem;
                    }

                    .home .row .books-slider a img{
                        height: 25rem;
                    }

                    .home .row .books-slider a:hover img{
                        transform: scale(.9);
                    }
                    .stand {
                    height: 400px;
                    background-size: cover;
                    margin-top: -150px !important;
                    }

                    .home .row .books-slider .stand{
                        width:100%;
                        margin-top: -2rem;
                    }

                    .home .row .content h3{
                        color:var(--black);
                        font-size: 4.5rem;
                    }

                    .home .row .content p{
                        color:var(--light-color);
                        font-size: 1.4rem;
                        line-height: 2;
                        padding:1rem 0;
                    }

                    .icons-container{
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
                        gap:1.5rem;
                    }

                    .icons-container .icons{
                        display: flex;
                        align-items: center;
                        gap:1.5rem;
                        padding:2rem 0;
                    }

                    .icons-container .icons i{
                        font-size: 3.5rem;
                        color:var(--green);
                    }

                    .icons-container .icons h3{
                        font-size: 2.2rem;
                        color:var(--black);
                        padding-bottom: .5rem;
                    }

                    .icons-container .icons p{
                        font-size: 1.4rem;
                        color:var(--light-color);
                    }

                    .featured .featured-slider .box{
                        margin:2rem 0;
                        position: relative;
                        overflow: hidden;
                        border:var(--border);
                        text-align: center;
                    }

                    .featured .featured-slider .box:hover{
                        border:var(--border-hover);
                    }

                    .featured .featured-slider .box .image{
                        padding:1rem;
                        background: linear-gradient(15deg, #eee 30%, #fff 30.1%);
                    }

                    .featured .featured-slider .box:hover .image{
                        transform: translateY(6rem);
                    }

                    .featured .featured-slider .box .image img{
                        height: 25rem;
                    }

                    .featured .featured-slider .box .icons{
                        border-bottom: var(--border-hover);
                        position: absolute;
                        top:0; left:0; right: 0;
                        background: #fff;
                        z-index: 1;
                        transform: translateY(-105%);
                    }

                    .featured .featured-slider .box:hover .icons{
                        transform: translateY(0%);
                    }

                    .featured .featured-slider .box .icons a{
                        color:var(--black);
                        font-size: 2.2rem;
                        padding:1.3rem 1.5rem;
                    }

                    .featured .featured-slider .box .icons a:hover{
                        background:var(--green);
                        color:#fff;
                    }

                    .featured .featured-slider .box .content{
                        background:#eee;
                        padding:1.5rem;
                    }

                    .featured .featured-slider .box .content h3{
                        font-size: 2rem;
                        color:var(--black);
                    }

                    .featured .featured-slider .box .content .price{
                        font-size: 2.2rem;
                        color:var(--black);
                        padding-top: 1rem;
                    }

                    .featured .featured-slider .box .content .price span{
                        font-size: 1.5rem;
                        color:var(--light-color);
                        text-decoration: line-through;
                    }

                    .swiper-button-next,
                    .swiper-button-prev{
                        border:var(--border-hover);
                        height:4rem;
                        width:4rem;
                        color:var(--black);
                        background: #fff;
                    }

                    .swiper-button-next::after,
                    .swiper-button-prev::after{
                        font-size: 2rem;
                    }

                    .swiper-button-next:hover,
                    .swiper-button-prev:hover{
                        background: var(--black);
                        color:#fff;
                    }

                    .newsletter{
                        background:url(../image/letter-bg.jpg) no-repeat;
                        background-size: cover;
                        background-position: center;
                        background-attachment: fixed;
                    }

                    .newsletter form{
                        max-width: 45rem;
                        margin-left: auto;
                        text-align: center;
                        padding:5rem 0;
                    }

                    .newsletter form h3{
                        font-size: 2.2rem;
                        color:#fff;
                        padding-bottom: .7rem;
                        font-weight: normal;
                    }

                    .newsletter form .box{
                        width: 100%;
                        margin: .7rem 0;
                        padding:1rem 1.2rem;
                        font-size: 1.6rem;
                        color:var(--black);
                        border-radius: .5rem;
                        text-transform: none;
                    }

                    .arrivals .arrivals-slider .box{
                        display: flex;
                        align-items:center;
                        gap:1.5rem;
                        padding:2rem 1rem;
                        border:var(--border);
                        margin:1rem 0;
                    }

                    .arrivals .arrivals-slider .box:hover{
                        border:var(--border-hover);
                    }

                    .arrivals .arrivals-slider .box .image img{
                        height:15rem;
                    }

                    .arrivals .arrivals-slider .box .content h3{
                        font-size: 2rem;
                        color:var(--black);
                    }

                    .arrivals .arrivals-slider .box .content .price{
                        font-size: 2.2rem;
                        color:var(--black);
                        padding-bottom: .5rem;
                    }

                    .arrivals .arrivals-slider .box .content .price span{
                        font-size: 1.5rem;
                        color:var(--light-color);
                        text-decoration: line-through;
                    }

                    .arrivals .arrivals-slider .box .content .stars i{
                        font-size: 1.5rem;
                        color:var(--green);
                    }

                    .deal{
                        background:#f3f3f3;
                        display: flex;
                        align-items: center;
                        flex-wrap: wrap;
                        gap:1.5rem;
                    }

                    .deal .content{
                        flex:1 1 42rem;
                    }

                    .deal .image{
                        flex:1 1 42rem;
                    }

                    .deal .image img{
                        width: 100%;
                    }

                    .deal .content h3{
                        color:var(--green);
                        font-size: 2.5rem;
                        padding-bottom: .5rem;
                    }

                    .deal .content h1{
                        color:var(--black);
                        font-size: 4rem;
                    }

                    .deal .content p{
                        padding:1rem 0;
                        color:var(--light-color);
                        font-size: 1.4rem;
                        line-height: 2;
                    }

                    .reviews .reviews-slider .box{
                        border:var(--border);
                        padding:2rem;
                        text-align: center;
                        margin:2rem 0;
                    }

                    .reviews .reviews-slider .box:hover{
                        border:var(--border-hover);
                    }

                    .reviews .reviews-slider .box img{
                        height:7rem;
                        width:7rem;
                        border-radius: 50%;
                        object-fit: cover;
                    }

                    .reviews .reviews-slider .box h3{
                        color:var(--black);
                        font-size: 2.2rem;
                        padding:.5rem 0;
                    }

                    .reviews .reviews-slider .box p{
                        color:var(--light-color);
                        font-size: 1.4rem;
                        padding:1rem 0;
                        line-height: 2;
                    }
                        .logo1{
                                width: 200px;
                                height: auto;
                        }

                    .reviews .reviews-slider .box .stars{
                        padding-top: .5rem;
                    }

                    .reviews .reviews-slider .box .stars i{
                        font-size: 1.7rem;
                        color:var(--green);
                    }
                      .news1{
                          font-size: 18px;
                            margin-left: 5px;
                      }
                    .blogs .blogs-slider .box{
                        margin:2rem 0;
                        border:var(--border);
                    }

                    .blogs .blogs-slider .box:hover{
                        border:var(--border-hover);
                    }

                    .blogs .blogs-slider .box .image{
                        height: 25rem;
                        width: 100%;
                        overflow: hidden;
                    }

                    .blogs .blogs-slider .box .image img{
                        height: 100%;
                        width: 100%;
                        object-fit: cover;
                    }

                    .blogs .blogs-slider .box:hover .image img{
                        transform: scale(1.1);
                    }

                    .blogs .blogs-slider .box .content{
                        padding:1.5rem;
                    }

                    .blogs .blogs-slider .box .content h3{
                        font-size: 2.2rem;
                        color:var(--black);
                    }

                    .blogs .blogs-slider .box .content p{
                        font-size: 1.4rem;
                        color:var(--light-color);
                        padding:1rem 0;
                        line-height: 2;
                    }
                    .det-img{
                        width:100%;
                        height:300px;
                    }

                    .footer .box-container{
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
                        gap:1.5rem;
                    }

                    .footer .box-container .box h3{
                        font-size: 2.2rem;
                        color:var(--black);
                        padding:1rem 0;
                    }

                    .footer .box-container .box a{
                        display: block;
                        font-size: 1.4rem;
                        color:var(--light-color);
                        padding:1rem 0;
                    }

                    .footer .box-container .box a i{
                        color:var(--green);
                        padding-right: .5rem;
                    }

                    .footer .box-container .box a:hover i{
                        padding-right: 2rem;
                    }

                    .footer .box-container .box .map{
                        width:100%;
                    }

                    .footer .share{
                        padding:1rem 0;
                        text-align: center;
                    }

                    .footer .share a{
                        height: 5rem;
                        width: 5rem;
                        line-height: 5rem;
                        font-size: 2rem;
                        color:#fff;
                        background:var(--green);
                        margin:0 .3rem;
                        border-radius: 50%; 
                    }

                    .footer .share a:hover{
                        background:var(--black);
                    }

                    .footer .credit{
                        border-top: var(--border);
                        margin-top: 2rem;
                        padding:0 1rem;
                        padding-top: 2.5rem;
                        font-size: 2rem;
                        color:var(--light-color);
                        text-align: center;
                    }

                    .footer .credit span{
                        color:var(--green);
                    }

                    .loader-container{
                        display: none !important;
                        top:0; left: 0;
                        height:100%;
                        width: 100%;
                        z-index: 10000;
                        background:#f7f7f7;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .loader-container.active{
                        display: none;
                    }

                    .loader-container img{
                        height:10rem;
                    }










                    /* media queries  */

                    @media (max-width:991px){

                        html{
                            font-size: 55%;
                        }

                        .header .header-1{
                            padding:2rem;
                        }

                        section{
                            padding:3rem 2rem;
                        }

                    }

                    @media (max-width:768px){

                        html{
                            scroll-padding-top: 0;
                        }

                        body{
                            padding-bottom: 6rem;
                        }

                        .header .header-2{
                            display:none;
                        }

                        .bottom-navbar{
                            display: block;
                        }

                        #search-btn{
                            display: inline-block;
                        }

                        .header .header-1{
                            box-shadow: var(--box-shadow);
                            position: relative;
                        }
                       

                        .header .header-1 .search-form{
                            position:absolute;
                            top:-115%; right:2rem;
                            width: 90%;
                            box-shadow: var(--box-shadow);
                        }
                        .mySwiper22{
                            height:400px !important;
                        }

                        .header .header-1 .search-form.active{
                            top:115%;
                        }

                        .home .row .content{
                            text-align: center;
                        }
                        .alo{
                            width:100% !important; 
                            height:100% ;
                        }
                        .wid{
                            width:100%;
                        }

                        .home .row .content h3{
                            font-size: 3.5rem;
                        }

                        .newsletter{
                            background-position: right;
                        }

                        .newsletter form{
                            margin-left:0;
                            max-width: 100%;
                        }

                    }

                    @media (max-width:450px){

                        html{
                            font-size: 50%;
                        }

                    }
                    .youtube2 iframe{
            height:130px !important;

        }
        .alo{
                            width: 100% !important;
                            height: auto + 10% !important;
                            background-position:top;
                        }
        .dole{
            width:23%;
            height:100px;
        }
        .mini-img{
            width: 100%;
            height:auto;
        }
       .main-youtube{
           height:max-content;
       }
       .mySwiper11 {
           padding:10px;
       }
</style>

    @php
      $image = DB::table('multiple_image')->where('prod_id',$product->id)->first();
      $images = explode('|',$image->image);
    @endphp

<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

    <a href="/" class="logo"><img  src="/image/logo.png" class="logo1" alt="">
         
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



    
    
      <div class = "card cardest">
        <!-- card left -->
       

        <div class="swiper mySwiper wid">
        <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;height:400px;"
      class="swiper mySwiper22"
    >
      <div class="swiper-wrapper">
        <div class="swiper-slide youtube-video main-youtube ">
         <!--  -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$product->youtube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="swiper-slide alo">
          <img class="alo" src="{{ asset('uploads/products/'.$product->profile_image)}}" />
        </div>
        @foreach ($images as $items)
          <div class="swiper-slide alo">
            <img class="alo" src="{{$items}}" />
          </div>
        @endforeach
        
        <img src="{{URL::to($items)}}">
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper11">
      <div class="swiper-wrapper">
        <div class="swiper-slide youtube-video youtube2">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$product->youtube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="swiper-slide dole">
          <img class="mini-img"  src="{{ asset('uploads/products/'.$product->profile_image)}}" />
        </div>
        @foreach ($images as $items)
        <div class="swiper-slide dole">
          <img class="mini-img" src="{{URL::to($items)}}" />
        </div>
        @endforeach
        
      </div>
    </div>

  

        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">{{$product->name}}</h2>
          
          

          

          <div class = "product-detail">
            <h2 class="about">პროდუქტის შესახებ</h2>
            <p class="desc">{{$product->description}}</p>
            <div style="display:flex;"  class="small flex text-muted font-italic">ფასი:<h6 id="old" class="old">{{$product->price}}</h6> <h6 id="new" class="new">{{$product->discount_price}}</h6> <h6 class="news1"> ლარი</h6></div>

          </div>
          <br>
          <br>
          <a href="tel:0322420710" class="btn">შესაკვეთად დაგვირეკეთ</a>

          <!-- paypal -->
          <!-- <form action="paypal/{{$product['id']}}">
              <button class="btn btn-primary">ყიდვა</button>
          </form> -->

         
        </div>
      </div>
    

    
  


<br>




<div class="row">
   
</div>


<div class="container ">
    <div class="row lase">









<div class="swiper mySwiper12">
<h1 class="heading"> <a href="/misabmeli"> <span>მსგავსი პროდუქტები</span></a> </h1>
      <div class="swiper-wrapper tesa">
      @foreach($relative as $item)
    <div class="swiper-slide">


   

<!-- Card-->

<a href="{{$item['id']}}"><div class="shadow-sm border-0">
    <div class="card-body cardes p-4"><img class="det-img" src="{{ asset('uploads/products/'.$item->profile_image)}}" alt="" class=" product-image img-fluid d-block mx-auto mb-3">
        <h5> <a href="#" class="text-dark">{{$item->name}}</a></h5>
        <div style="display:flex;"  class="small flex text-muted font-italic"><h6 id="old" class="old">{{$item->price}}</h6> <h6 id="new" class="new">{{$item->discount_price}}</h6> <h6 class="news1"> ლარი</h6></div>
        
       
    </div>
</div></a>

</div>

   
@endforeach 

        
      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
</div>









   

    












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
















    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper11", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,

      });
      var swiper2 = new Swiper(".mySwiper22", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>




    
	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

<script>
      var swiper = new Swiper(".mySwiper12", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>
<script>
    const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
 
</script>
<script type="text/javascript">
        function openFunction(){
            document.getElementById("menu").style.width="300px"
        }
        function closeFunction(){
            document.getElementById("menu").style.width="0px"
        }

     
      
        $( ".product-title" ).click(function() {
  alert( "Handler for .click() called." );
});
</script>
<script>
    $('.new').each(function(){
  if ($(this).is(':empty')) {
    $(this).prev().css({"color": "#6c757d", "text-decoration": "none"});
  }else{
    $(this).prev().css({"color": "red", "text-decoration": "line-through","margin-right":"5px"});
  }

  


// gamkrobi
  var $minHeight = 20;
var $priceHeight = $('.youtube-video').height();
if ( $priceHeight < $minHeight) {
    $(".youtube-video").remove();
}else{
    $(".youtube-video").css("height","100% !important;");
}

});






       
        
       
</script>

</body>


</html>





