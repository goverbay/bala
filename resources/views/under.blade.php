<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BALA Indonesia</title>
<!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/copy.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{route('home')}}" class="logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route('home')}}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('about-us')}}">About Us</a></li>
                            <li class="scroll-to-section"><a href="{{route('under')}}">My Bala</a></li>
                            <li class="scroll-to-section"><a href="{{route('under')}}">Balamag</a></li>
                            <li class="scroll-to-section"><a href="{{route('under')}}">Process</a></li>
                            <li class="scroll-to-section"><a href="{{route('under')}}">Bala Shop</a></li>
                            <li class="scroll-to-section"><a href="{{route('under')}}">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome" style="background-image: url({{asset('assets/images/about.jpg')}});">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-12 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h2>Under Construction</h2>
                        <p>Page ini masih dikembangkan oleh pengembang - BALA Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
    

   <!-- jQuery -->
   <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

   <!-- Bootstrap -->
   <script src="{{asset('assets/js/popper.js')}}"></script>
   <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

   <!-- Plugins -->
   <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
   <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
   <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
   <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
   <script src="{{asset('assets/js/imgfix.min.js')}}"></script>

   <!-- Global Init -->
   <script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>