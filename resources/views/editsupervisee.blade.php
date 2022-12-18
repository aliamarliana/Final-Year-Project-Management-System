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

<div style="position:relative; top:60px; right:-80px;">
<h2 class="banner-heading h2 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
Edit Project Details</h2>
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="/updateproj" method="post">
        @csrf
    <input type="hidden" name="id" value="{{$proj['id']}}"><br/>
      <div class="formbold-input-group">
        <label for="name" class="formbold-form-label">Student Name: </label>
        <input
          type="text"
          name="name"
          value="{{$proj['student_name']}}"
          class="formbold-form-input" disabled
        />
      </div>

      <div class="formbold-input-group">
        <label class="formbold-form-label">
        Project Category:
        </label>

        <select class="formbold-form-select" name="category" required>
        @if($proj['category'] != "Development Project")
      <option value="{{$proj['category']}}">{{$proj['category']}}</option>
      <option value="Development Project">Development Project</option>
      @else
      <option value="{{$proj['category']}}">{{$proj['category']}}</option>
        <option value="Research Project">Research Project</option>
      @endif
        </select>
      </div>



      <div class="formbold-input-group">
        <label for="name" class="formbold-form-label">Project Title: </label>
        <input
          type="text"
          name="title"
          value="{{$proj['title']}}"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-input-group">
        <label for="name" class="formbold-form-label">Start Date: </label>
        <input
          type="date"
          name="start_date"
          value="{{$proj['start_date']}}"
          class="formbold-form-input" required
        />
      </div>

      <div class="formbold-input-group">
        <label for="name" class="formbold-form-label">End Date: </label>
        <input
          type="date"
          name="end_date"
          value="{{$proj['end_date']}}"
          class="formbold-form-input" required
        />
      </div>

      <div class="formbold-input-group">
        <label class="formbold-form-label">
        Progress:
        </label>

        <select class="formbold-form-select" name="progress" required>
        <option value="{{$proj['progress']}}">{{$proj['progress']}}</option>
        <option value="Milestone 1">Milestone 1</option>
        <option value="Milestone 2">Milestone 2</option>
        <option value="Final Report">Final Report</option>
        </select>
      </div>

      <div class="formbold-input-group">
        <label class="formbold-form-label">
        Status:
        </label>

        <select class="formbold-form-select" name="status" required>
        <option value="{{$proj['status']}}">{{$proj['status']}}</option>
        <option value="On track">On track</option>
        <option value="Delayed">Delayed</option>
        <option value="Extended">Extended</option>
        <option value="Completed">Completed</option>
        </select>
      </div>

      <button class="formbold-btn" type="submit">Update</button>
    </form>
    <a href="{{url('/list-of-supervisee')}}"><button class="formb-btn">Back</button></a><br><br>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }


  .formbold-form-wrapper {
    

    width: 50%;
    background: white;
   
  }

  .formbold-form-img {
    margin-bottom: 45px;
  }

  .formbold-input-group {
    margin-bottom: 18px;
  }

  .formbold-form-select {
    width: 100%;
    padding: 12px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }

  .formbold-input-radio-wrapper {
    margin-bottom: 25px;
  }
  .formbold-radio-flex {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }
  .formbold-radio-label {
    font-size: 14px;
    line-height: 24px;
    color: #07074d;
    position: relative;
    padding-left: 25px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .formbold-input-radio {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  .formbold-radio-checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #ffffff;
    border: 1px solid #dde3ec;
    border-radius: 50%;
  }
  .formbold-radio-label
    .formbold-input-radio:checked
    ~ .formbold-radio-checkmark {
    background-color: #6a64f1;
  }
  .formbold-radio-checkmark:after {
    content: '';
    position: absolute;
    display: none;
  }

  .formbold-radio-label
    .formbold-input-radio:checked
    ~ .formbold-radio-checkmark:after {
    display: block;
  }

  .formbold-radio-label .formbold-radio-checkmark:after {
    top: 50%;
    left: 50%;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #ffffff;
    transform: translate(-50%, -50%);
  }

  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder {
    color: #536387;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074d;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formb-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border-color: #6a64f1;
    font-weight: 500;
    background-color: white;
    color: #6a64f1;
    cursor: pointer;
    margin-top: 25px;
  }
</style>
</div>

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