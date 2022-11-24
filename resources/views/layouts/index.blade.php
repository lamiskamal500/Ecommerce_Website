<?php
use App\Http\Controllers\ProductController;
$total = ProductController::Cart();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Freehand&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/main_css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/main_css/fullstack.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
  </head>
  <body>
    <!-- start account -->

    <div class="container-fluid">
      <div class="row">
    <nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand free_ship" href="#"
          >Free Shipping of All orders Over $75!</a
        >
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav" style="margin-left: 500px">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Wishlist</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Currency:Used
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
                @if (Auth::check())
                <a class="nav-link" href="#">MyCraft({{$total}})</a>
                @endif
            </li>

              <li class="nav-item dropdown">
                @if (Auth::check())

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name}}
                </a>
                @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Login
                </a>
                @endif

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="{{route('login')}}">Login</a>
                    <a class="dropdown-item" href="{{route('register')}}">Register</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    t
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                  </li>
                @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
    <!-- end account -->
    <!-- start search input -->
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-4 find">
        <form action="/search">
        <input
          class="search"
          type="text"
          name="query"
          placeholder="Search Her What You Need...."
        />
    </form>
      </div>
    </div>
</div>
    <!-- end search input -->


     @yield('content')

      <!-- Start footer section -->
      <section class="footer">
          <div class="row">
            <div class="footer_div">
              <div class="row" style="margin-top: 60px;">
                <div class="col">
                  <ul class="footer_elements">
                  <li><h1>SHOPS</h1></li>
                  <li><a href="">New In</a></li>
                  <li><a href="">Women</a></li>
                  <li><a href="">Men</a></li>
                  <li><a href="">Schuhe Shoes</a></li>
                  <li><a href="">Bags & Accessories</a></li>
                  <li><a href="">Top Brands</a></li>
                  <li><a href="">Sale & Special Offers</a></li>
                  <li><a href="">Lookbook</a></li>
                </ul>
                </div>
                <div class="col">
                  <ul class="footer_elements">
                  <li><h1>INFORMATION</h1></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">CustomerService</a></li>
                  <li><a href="">New Collction</a></li>
                  <li><a href="">Best Selers</a></li>
                  <li><a href="">Manufactrers</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Terms & Condition</a></li>
                  <li><a href="">Blog</a></li>
                </ul>
                </div>
                <div class="col">
                  <ul class="footer_elements">
                  <li><h1>CUSTOMER SERVICE</h1></li>
                  <li><a href="">Serach Terms</a></li>
                  <li><a href="">Advanced Search</a></li>
                  <li><a href="">Orders and Returns</a></li>
                  <li><a href="">Contact Us</a></li>
                  <li><a href="">RSS</a></li>
                  <li><a href="">Help & FAQs</a></li>
                  <li><a href="">Consultant</a></li>
                  <li><a href="">Store Locations</a></li>
                </ul>
                </div>
                <div class="col">
                  <ul class="footer_elements">
                    <li><h1>NEWSLETTER</h1></li>
                    <li><a href="">Sign Up for News Letter</a></li>
                    <li><input type="text" placeholder="Type Your Email"></li>
                    <li><button>SUBSCRIBE</button></li>
                    <li class="links">
                      <a href=""><i class="fab fa-facebook-square link"></i></a>
                      <a href=""><i class="fab fa-twitter-square link"></i></a>
                      <a href=""><i class="fab fa-instagram-square link"></i></a>
                      <a href=""><i class="fab fa-youtube-square link"></i></a>
                      <a href=""><i class="fab fa-tumblr-square link"></i></a>
                      <a href=""><i class="fab fa-vimeo link"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
      </section>
      <!-- End footer section -->

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/fullstack.js"></script>
  </body>
</html>
