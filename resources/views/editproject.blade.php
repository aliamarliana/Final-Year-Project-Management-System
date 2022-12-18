<!DOCTYPE html>
<html lang="en">

<head>
    <title>FYP Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{asset('assets/css/boxicon.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/templatemo.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
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
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/redirect">Home</a>
                        </li>
                           	
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/list-of-supervisee">List of Supervisee</a>
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

<h1>Edit Supervisee Details</h1>
<form action="/updateproj" method="post">
@csrf
<input type="hidden" name="id" value="{{$proj['id']}}"><br/><br/>
<label>Student Name: </label>
<input type="text" name="name" value="{{$proj['student_name']}}" readonly><br><br>

<label>Project Title: </label>
<input type="text" name="title" value="{{$proj['title']}}" readonly><br><br>

<label>Start Date: </label>
<input type="date" name="start_date" value="{{$proj['start_date']}}"><br><br>

<label>End Date: </label>
<input type="date" name="end_date" value="{{$proj['end_date']}}"><br><br>

<label>Duration: </label>
<input type="text" name="duration" value="{{$proj['duration']}}"><br><br>

<label>Progress: </label>
<select name="progress" required>
<option value="{{$proj['progress']}}">{{$proj['progress']}}</option>
<option value="Milestone 1">Milestone 1</option>
<option value="Milestone 2">Milestone 2</option>
<option value="Final Report">Final Report</option>
</select><br><br> 


<label>Status: </label>
<select name="status" required>
<option value="{{$proj['status']}}">{{$proj['status']}}</option>
<option value="On track">On track</option>
<option value="Delayed">Delayed</option>
<option value="Extended">Extended</option>
<option value="Completed">Completed</option>
</select><br><br> 

<button type="submit" class="submit-btn">Update</button><br><br>
<form>

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