<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
        <a href="index.html" class="navbar-brand">المجلة</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
            <li class="nav-item px-2">
                <a href="index.html" class="nav-link active">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item px-2">
                <a href="posts.html" class="nav-link">مجلات</a>
            </li>
            <li class="nav-item px-2">
                <a href="categories.html" class="nav-link">الاقسام</a>
            </li>
            <li class="nav-item px-2">
                <a href="users.html" class="nav-link">الكتاب</a>
            </li>
            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="fas fa-user"></i> مرحبا {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                    </a>
                </li>
            {{-- <li class="nav-item dropdown mr-3">
                <div class="dropdown-menu">
                <a href="profile.html" class="dropdown-item">
                    <i class="fas fa-user-circle"></i> Profile
                </a>
                <a href="settings.html" class="dropdown-item">
                    <i class="fas fa-cog"></i> Settings
                </a>
                </div>
            </li> --}}
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('تسجيل الخروج') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
        <div class="row">
            <div>
            <h1>
                <i class="fas fa-cog"></i> لوحة التحكم</h1>
            </div>
        </div>
        </div>
    </header>
    
    <div class="py-5">
        @yield('content')
    </div>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    CKEDITOR.replace('editor1');
    </script>
</body>
</html>
    
    