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
@php
$i = 1
@endphp
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
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/redirect')}}">Home</a>
                        </li>
                           	
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/list-of-supervisee')}}" >List of Supervisee</a>
                        </li>

                            <li>
                                @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                   <li > <x-app-layout>
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
<div style="position:relative; top:60px; right:-80px;">
<h2 class="banner-heading h2 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
List of Supervisees</h2>
<p class="banner-body text-muted py-3 mx-0 px-0">
Below are the list of your supervisees.</p>
<table class="styled-table">
    <thead>
    <tr>
        <th>No.<th>
        <th>Student Name<th>
        <th>Project Title<th>
        <th>Start Date<th>   
        <th>End Date<th>
        <th>Duration (in month)<th>    
        <th>Progress<th> 
        <th>Status<th> 
        <th>Examiner 1 Name<th>    
        <th>Examiner 2 Name<th>  
        <th>Action</th>                
    </tr>
    </thead>
    <tbody>
    @foreach($project as $proj)
    <tr>
        <td>{{$i++}}<td>
        <td>{{$proj['student_name']}}<td>
        <td>{{$proj['title']}}<td>
        <td>{{$proj['start_date']}}<td>  
        <td>{{$proj['end_date']}}<td>
        <td>{{$proj['duration']}}<td>   
        <td>{{$proj['progress']}}<td> 
        <td>{{$proj['status']}}<td>
        <td>{{$proj['examiner1_name']}}<td>    
        <td>{{$proj['examiner2_name']}}<td>  
        <td><a href={{"/editproj/".$proj['id']}}><button class="button1">Edit</button></a>&nbsp;</td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
<style>
      th,td {
        height: 60px;
        width: 80px;
        text-align: center;
        vertical-align: middle;
      }

      .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }

    .styled-table thead tr {
    background-color: #6c7ad2;
    color: #ffffff;
    text-align: left;
}
.styled-table tbody tr {
    border-bottom: 1px solid #f5f6f5;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f5f6f5;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #6c7ad2;
}
</style>
<style>

.button1 {
  background-color: orange; 
  color: white; 
  border: 2px solid orange;
  border-radius: 8px;
  padding: 8px;
}

.button1:hover {
  background-color: white;
  color: orange;
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