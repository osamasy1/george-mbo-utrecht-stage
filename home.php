<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>George Marina</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="./css/style.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>



  <!-- Navbar -->

<!-- 
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#Corona">Corona</a>
    <a href="#Menu">Menu</a>
    <a href="#Reservation">Reservation</a>
    <a href="#contactUS">About</a>
    <a href="#contactUS">Contact</a>
    <a href="./login.php">Login</a>
    <a href="./register.php">Register</a>
  </div>
  
  <div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  </div>
   -->

  <!-- End Navbar -->
  
<div class="container">
  
  
  <br>
  <hr style="width:88.5%;color:rgb(0, 0, 0);background-color:rgb(0, 0, 0);margin: auto;">

<h1 id="title">George Marina</h1>

<hr style="width:88.5%;color:rgb(0, 0, 0);background-color:rgb(0, 0, 0);margin: auto;">



  <!-- Carousel(1) -->


  <div class="container">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="./images/george marina Amsterdam.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
  </div>


  <!-- End carousel(1) -->
  <br>
  <hr class="hrlength">
  <br> 
  
 
  <!-- Carousel(2) -->


  <div class="container">
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/img2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/img1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/img4.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/img3.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button> -->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>


  <!-- End Carousel(2) -->

  
  <br>
  <hr class="hrlength">


  <!-- Menu -->


  <section class ="menu" id="Menu">
    <div class = "menu-container">
      <div class = "menu-head">
        <h2>Menu</h2>
        <p>Whether you’re vegetarian, vegan or ‘veggie curious’, you will find a number of carefully selected vegetarian and plant based items on our menu. The vegetarian dishes speak for themselves in the description. Our dishes are marked with a symbol containing their respective ingredients which may trigger allergies. Any questions? Just ask our staff!</p>
      </div>

      <div class = "menu-btns">
        <button type = "button" class = "menu-btn active-btn" id = "featured">Featured</button>
        <button type = "button" class = "menu-btn" id = "lunch">Lunch</button>
        <button type = "button" class = "menu-btn" id = "dinner">Dinner</button>
      </div>


      <!-- Food items have an optional description you can add if you'd like but for now I did not see the need of it and kept it simple-->
      <div class = "food-items">
        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "foods/banana-bread-with-butter-and-milk.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Banana Bread With Butter & Milk</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$25.00</h3>
            
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-drumstick-bite"></i></li>
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <p class = "description">Banana bread with butter and milk made moist with syrup sauce</p>
            <button type="button" class="btn btn-outline-dark">Bestellen</button>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item lunch">
          <div class = "food-img">
            <img src = "foods/barbecue.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Barbecue</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$20.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-drumstick-bite"></i></li>
            </ul>
            <!-- <p class = "description">Real smoked barbecue</p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item dinner">
          <div class = "food-img">
            <img src = "foods/barbecued-roasted-duck-ramen.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Barbecued Roasted Duck Ramen</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$35.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-drumstick-bite"></i></li>
              <li><i class = "fas fa-egg"></i></li>
            </ul>
            <!-- <p class = "description">Roasted barbecued duck combined with Ramen</p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "foods/bread-with-seeds-and-butter.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Bread With Seeds & Butter</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$27.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-seedling"></i></li>
              <li><i class = "fab fa-nutritionix"></i></li>
            </ul>
            <!-- <p class = "description">Bread coated in butter with seeds</p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item lunch">
          <div class = "food-img">
            <img src = "foods/breakfast-sandwich-with-hummus-spread-and-fresh-vegetables.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Breadfast Sandwich</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$15.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item dinner">
          <div class = "food-img">
            <img src = "foods/brunch-skillet-with-eggs-and-tomatoes.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Brunch Skillet</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$10.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-drumstick-bite"></i></li>
              <li><i class = "fas fa-egg"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "foods/chicken-breast-steaks-with-beetroot.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Chicken Breast Steaks</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$15.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-drumstick-bite"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item lunch">
          <div class = "food-img">
            <img src = "foods/chicken-legs-with-tomatoes-peppers-and-oranges.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Chicken Legs</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$29.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-drumstick-bite"></i></li>
            </ul>
            
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item dinner">
          <div class = "food-img">
            <img src = "foods/eggplant-cannelloni.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Eggplant Cannelloni</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$35.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "foods/french-fries-with-steak-and-beer.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">French Fries</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$9.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item lunch">
          <div class = "food-img">
            <img src = "foods/fried-rice-with-shrimps.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Fried Rice</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$5.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item dinner">
          <div class = "food-img">
            <img src = "foods/king-prawns-with-green-lettuce.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">King Prawns</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$11.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-fish"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "foods/noodles-with-egg-and-vegetables.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Noodles</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$5.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-egg"></i></li>
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item lunch">
          <div class = "food-img">
            <img src = "foods/pizza-with-a-lot-of-cheese.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Cheese Pizza</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$12.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item dinner">
          <div class = "food-img">
            <img src = "foods/summer-juicy-beef-burger.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Juicy beef burger</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$14.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-drumstick-bite"></i></li>
              <li><i class = "fas fa-cheese"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "foods/tacos-with-pulled-pork-fresh-vegetables-and-cream.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Tacos with pulled pork</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$22.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-drumstick-bite"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item lunch">
          <div class = "food-img">
            <img src = "foods/tiny-pickles-on-top-of-burger.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">tiny pickles</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$7.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-bread-slice"></i></li>
              <li><i class = "fas fa-drumstick-bite"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item dinner">
          <div class = "food-img">
            <img src = "foods/tortilla-chips-with-salsa.jpg" class="img-menu" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">tortilla chips</h2>
            <div class = "line"></div>
            <h3 class = "food-price">$26.00</h3>
            <ul class = "rating">
              <li><i class = "fas fa-seedling"></i></li>
            </ul>
            <!-- <p class = "description"></p> -->
          </div>
        </div>
        <!-- end of item -->
      </div>
    </div>
  </section>
  <div class = "menu-btns">
    <button type = "button" class = "entire-menu" onclick=" window.open('https:uploads-ssl.webflow.com/5f3ece93689659d6e7431728/610a90208d041a26db60ceb7_Marina%20food.pdf','_blank')" id = "entire-menu">See entire menu</button>
  </div>


  <!-- End menu -->


  <br>
  <hr class="hrlength">
  <br>

  <!-- Team/Careers -->
 
  <div class="team-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2>Our Team</h2>
          <p>Meet the George Marina team</p>
        </div>
      </div>

      <!--== Single Team Item ==-->
      <div class="col-md-3">
        <div class="single-team">
          <div class="team-img">
            <img src="images/JamieOliver.png" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Jamie Oliver</h3>
              <p>Founder</p>
            </div>
            <!-- <p class="team-text">Tekst, mocht dat later toegevoegd willen worden</p> -->
          </div>
        </div>
      </div>  
      <!--== Single Team Item ==-->
      <div class="col-md-3">
        <div class="single-team">
          <div class="team-img">
            <img src="images/GordonRamsay.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Gordon Ramsay</h3>
              <p>Team manager</p>
            </div>
            <!-- <p class="team-text">Tekst, mocht dat later toegevoegd willen worden</p> -->
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-3">
        <div class="single-team">
          <div class="team-img">
            <img src="images/AlainDucasseq.png" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Alain Ducasse</h3>
              <p>Head cook</p>
            </div>
            <!-- <p class="team-text">Tekst, mocht dat later toegevoegd willen worden</p> -->
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-3">
        <div class="single-team">
          <div class="team-img">
            <img src="images/NusretGke.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Nusret Gökçe</h3>
              <p>Premium salter & Waiter</p>
            </div>
            <!-- <p class="team-text">Tekst, mocht dat later toegevoegd willen worden</p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class = "menu-btns">
    <button type = "button" class = "entire-menu" onclick=" window.open('https://george-landing.webflow.io/careers')" id = "entire-menu">Join our team</button>
  </div>


      
  <!-- End Team/Careers -->

  
    <br>
    <br>
    <hr class="hrlength">
    <br>
    <br>

  <!-- Corona -->


<div class="corona" id="coronanav">
  <h1>COVID-19 UPDATE</h1>
  <p>While indoor dining and private events are limited for now,
  George loves bringing people together in the safest way. All of our kitchen and waiting
   s</p>
      
  
  
      <h1> Please take a minute to read our new ‘House Rules’</h1>
  
      <p>There will be a host at the front door taking details for contact tracing purposes
  
  We will seat you on arrival
  
  You will remain spaced at a 1.5 m distance
  
  Tables are sanitised before and after your visit
  
  We prefer contactless payment options</p>
</div>

  
  <!-- End corona -->

  <br>
  <br>
  <hr class="hrlength">
  <br>
  <br>

<!-- Contact Us & About Us -->
  <div class="grid-container">
    <div class="grid-child purple">
     <h1>About Us</h1>
      <p>George Marina is set in a spectacular,<br>
      three storey waterside building in the 
      upcoming<br> Amstelkwartier, right along the 
      banks of the Amstel river that <br>flows into 
      Amsterdam's iconic canals.</p>
    </div>

    <div class="grid-child green" id="contact-about-us" >
      <h1>Contact Us</h1>
      
      <p>Spaklerweg 10A
      <br>
      1096 BA Amsterdam
      <br>
      + 31 20 737 0280
      <br>
      hello@georgemarina.nl</p>
      <br>
    </div>
    <div class="map" id="map">
    <iframe> </iframe>
  </div>
  <div class="map" id="map">
    <iframe src="https://tinyurl.com/ygkhqyag" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">  </iframe>
  </div>  
    
  
</div>
</div>
<br>
</div>

<!-- End Contact Us & About Us -->

<!-- Footer -->
      <div class="footer">
        == copyright 2021 == 
      </div>
<!-- End of Footer -->
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js\script.js"></script>
  </body>
</html>
