<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>@yield('title')</title>
    

    <!-- Bootstrap core CSS -->
    <link href="{{asset('users/assets/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('users/assets/css/all.min.css')}}" rel="stylesheet" >
    <!-- owl carousel CSS -->
    <link href="{{asset('users/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('users/assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.1.0/nouislider.min.css" />

    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon/favicon.png">
    <meta name="theme-color" content="#7952b3">


    <!-- Custom styles for this template -->
    <link href="{{asset('users/assets/css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('users/assets/css/style.css')}}" rel="stylesheet" >
  </head>
  
  <body>
    <!-- Menu and mobile menu -->
    <header>
        <nav class="navbar navbar-light" id="navbar_top">
          <div class="container">
            <div class="d-flex flex-row w-100">
              <ul class="nav">
                    <li><a class="navbar-brand justify-content-start logo me-5" href="#"><img src="../assets/img/logo.png" alt=""></a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pages</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">About</a></li>
                        <li><a class="dropdown-item" href="#">Categories</a></li>
                        <li><a class="dropdown-item" href="{{route('website.services')}}">Services</a></li>
                        <li><a class="dropdown-item" href="{{route('website.projects')}}">Projects</a></li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                      </ul>
                    </li>
          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Explore</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Timeline</a></li>
                        <li><a class="dropdown-item" href="#">Guides To Help You Grow</a></li>
                      </ul>
                    </li>
                </ul>
          
                <ul class="nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Timeline</a>
                  </li>
                  @if(!( auth()->guard('freelancer')->check() || auth()->guard('web')->check() ) )
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('website.login')}}">Sign in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('website.register')}}">Join</a>
                    </li>
                  @endif
                  @if(auth()->guard('freelancer')->check())
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('freelancer.index')}}">Dashboard (freelancer)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('freelancer.logout')}}">Logout</a>
                    </li>
                  @elseif(auth()->guard('web')->check())
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('user.index')}}">Dashboard (user)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('user.logout')}}">Logout</a>
                    </li>
                  @endif 
                  <li class="nav-item">
                    <div class="flex-shrink-0 dropdown langMenu nav-link">
                      <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                          En
                      </a>
                      <ul class="dropdown-menu text-small shadow langMenuUl  dropdown-menu-lg-end" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Arabic</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>

                <a class="navbar-brand justify-content-start logo-mo me-5 d-none" href="#"><img src="../assets/img/logo.png" alt=""></a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">Shuwier Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pages</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                          </ul>
                        </li>
              
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Explore</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
        </nav>
    </header>

      @yield('content')

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4">
            <img src="../assets/img/logo.png" alt="" class="img-fluid mb-4 logo">
            <a href="#" class="email d-block">shuwier@info.com</a>
          </div>

          <div class="col-md-8 col-lg-8">
              <div class="row">
                <div class="col-sm-4">
                  <h4>Services</h4>
                  <ul class="unstyle-list">
                    <li><a href="#">Browse Jobs</a></li>
                    <li><a href="#">Companies</a></li>
                    <li><a href="#">Candidates</a></li>
                    <li><a href="#">Pricing</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h4>Company</h4>
                  <ul class="unstyle-list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ'S</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h4>Blog</h4>
                  <ul class="unstyle-list">
                    <li><a href="#">Blog List</a></li>
                    <li><a href="#">Blog Grid</a></li>
                    <li><a href="#">Blog Full width</a></li>
                    <li><a href="#">Blog Details</a></li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
        
        <div class="d-flex bd-highlight mt-5 copyrights">
            <div class=""><a href="#">privacy and policey</a></div>
            <div class="ms-auto">
              <ul class="d-flex flex-wrap-reverse copyrightSocial">
                <li>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <div class="flex-shrink-0 dropdown langMenu px-3">
                      <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="true">
                        <i class="fa-solid fa-earth-americas"></i> English
                      </a>
                      <ul class="dropdown-menu text-small shadow langMenuUl" aria-labelledby="dropdownUser2" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 26px);">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Arabic</a></li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.2802 21.0695C4.80153 21.0695 0.360195 16.6282 0.360195 11.1495C0.360195 5.67083 4.80153 1.22949 10.2802 1.22949C15.7589 1.22949 20.2002 5.67083 20.2002 11.1495C20.2002 16.6282 15.7589 21.0695 10.2802 21.0695Z" fill="white" stroke="#74767E" stroke-width="0.64"/>
                        <path d="M10.2803 8.32339C9.54395 8.32339 8.94696 7.72646 8.94696 6.99007C8.94696 6.25369 9.54395 5.65674 10.2803 5.65674C11.0167 5.65674 11.6136 6.25369 11.6136 6.99007C11.6136 7.72646 11.0167 8.32339 10.2803 8.32339Z" fill="#74767E"/>
                        <path d="M5.21356 8.85669H15.3469C15.4884 8.85669 15.624 8.91288 15.724 9.01285C15.8241 9.11288 15.8802 9.24856 15.8802 9.39C15.8802 9.53144 15.8241 9.66712 15.724 9.76709C15.624 9.86712 15.4884 9.92331 15.3469 9.92331H11.8802V17.2567C11.8802 17.4335 11.81 17.6031 11.685 17.728C11.56 17.8531 11.3904 17.9233 11.2136 17.9233C11.0368 17.9233 10.8672 17.8531 10.7422 17.728C10.6171 17.6031 10.5469 17.4335 10.5469 17.2567V13.39H10.0136V17.2567C10.0136 17.4335 9.94335 17.6031 9.8183 17.728C9.69331 17.8531 9.52371 17.9233 9.34694 17.9233C9.17011 17.9233 9.0005 17.8531 8.87551 17.728C8.75046 17.6031 8.68025 17.4335 8.68025 17.2567V9.92331H5.21356C5.07212 9.92331 4.93651 9.86712 4.83647 9.76709C4.73644 9.66712 4.68025 9.53144 4.68025 9.39C4.68025 9.24856 4.73644 9.11288 4.83647 9.01285C4.93651 8.91288 5.07212 8.85669 5.21356 8.85669Z" fill="#74767E"/>
                      </svg>
                    </a>
                  </li>
              </ul>
            </div>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Video Title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <iframe src="https://player.vimeo.com/video/90617432" width="500" height="281" frameborder="0" style="width: 100% !important;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  <script src="{{asset('users/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('users/assets/js/jquery-3.7.1.min.js')}}"></script>
  <script src="{{asset('users/assets/js/owl.carousel.min.js')}}"></script>

  <script>
    $('.clients').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:8
            }
        }
    })

    $('.testimonialsCon').owlCarousel({
      rtl: true, // add this to the rest of the options
      loop:true,
      margin:30,
      nav:true,
      responsive:{
          0:{
              items:1.5
          },
          768:{
            items:1.5
          },
          1000:{
              items:3
          },
          1200:{
              items:3
          },
          1440:{
              items:4
          }
      }
  })
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            } 
        });
    }); 
  </script>
  @yield('js')
</body>
</html>
