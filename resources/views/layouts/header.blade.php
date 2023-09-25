<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand " style="display:flex" href="../"> <img src="../assets/images/logo.png" style="width:50px;height:50px; margin-top:-10px; margin-right:20px; border-radius:50%;" alt=""><h2>OFFROADS <em>HOBBY</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            <svg style="width:30px;height:30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/></svg>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../">მთავარი
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="../all_products">პროდუქტები</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../about">ჩვენ შესახებ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contact">კონტაქტი</a>
              </li>
              <li class="nav-item active">
                <form class="search" action="../search" method="post"> 
                  @csrf
                  <input name="search" style="border-radius:10px;height:35px; width:200px; margin-top:7px;" class="search form-control" placeholder="ძებნა" type="search">
                 <button class="formula" type="submit">
                 <svg  class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                 </button>
                </form>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
</header>

<style>

  .formula{
    position: absolute;
    margin-top: -30px;
    margin-left: 67px;
    cursor: pointer;
    border:none;
    background:none;
  }
  .search-icon{
    width: 20px;
    fill: #ecc20e;
  }
  .formula:focus {
	border: none;

  }
  
  .formula:focus-visible {
	border: none;
  }
  .search{
    margin-top:0px !important;
  }

  @media only screen and (max-width: 991px) {
  .formula{
    position: absolute;
    margin-top: -42px;
    margin-left: 67px;
    cursor: pointer;
    border:none;
    background:none;
  }
  .search-icon{
    width: 20px;
    fill: #ecc20e;
  }
  .formula:focus {
	border: none;

  }
  .search{
    margin:10px auto !important;
  }
  .formula:focus-visible {
	border: none;
  }
}
</style>