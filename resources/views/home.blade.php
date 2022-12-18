<!DOCTYPE html>
<html lang="en">

<head>
    <title>FYP Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container d-flex justify-content-between align-items-center">

                    
                        <!-- ***** Logo Start ***** -->
                        <a class="navbar-brand h1" href="/redirect">
                        <i class='bx bx-buildings bx-sm text-dark'></i>
                        <span class="text-dark h4">FYP</span> <span class="text-primary h4">Management System</span>
                        </a>
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">

                            <li>
                                @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/redirect')}}">Home</a>
                        </li>
                           	
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/list-of-supervisee')}}">List of Supervisee</a>
                        </li>
                                   <li> <x-app-layout>
                                    </x-app-layout></li>

                                @else
                                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link btn-outline-primary rounded-pill px-3">Log in</a></li>
                                    @if (Route::has('register'))
                                      <li class="nav-item">  <a href="{{ route('register') }}" class="nav-link btn-outline-primary rounded-pill px-3">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                        @endif
                            </li>
                        </ul>        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
    <!-- ***** Header Area End ***** -->


    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div class="banner-vertical-center-index container-fluid pt-5">

        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                <strong>Final Year Project Management System</strong> <br>for CCI
                              </h1>
                                <p class="banner-body text-muted py-3 mx-0 px-0">
                                This system was developed to help supervisors update their supervisees' progress and to help coordinators keep track of the overall students' progress.
                              <br>Final Year Project (FYP) is a compulsory course for all CCI diploma and degree programs. To graduate, 
                                students need to at least pass FYP course. In CCI, FYP coordinator is responsible in managing FYP 
                                matters. To improve efficiency and productivity in managing and coordinating FYP, a web-based 
                                system has been proposed.
                            </p>
                            </div>
                        </div>

        </div>
    </div>
    <!-- End Banner Hero -->
<style>
body {
 background-image: url('https://www.itarian.com/assets-new/images/project-management.png');
}
</style>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>