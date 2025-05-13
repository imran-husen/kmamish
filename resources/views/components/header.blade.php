<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <script src="{{ asset('javascript/main.js') }}"></script>

       <!-- This is the code of the favicons of the website -->
       <link rel="icon" type="{{ asset('/image/main logo.png') }}" href="favicon.png">
       
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    
    <!-- Linking of the new google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background: linear-gradient(135deg,rgb(75, 154, 239),rgb(206, 200, 218));">
    <div class="container-fluid">
        <!-- Toggle Button (Left Side) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Profile Icon (Right Corner) -->
        <a href="{{ url('/register')}}" class="d-flex align-items-center">
                <img src="{{asset('/image/main logo.png')}}" alt="User Profile" class="profile-icon">
            </a>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav" styel="color:black">
            <ul class="navbar-nav " >
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/')}}">Home</a>
                </li>

                <!-- Students Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown">
                        About-us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/register')}}">Education Life</a></li>
                        <li><a class="dropdown-item" href="{{url('/login')}}">Writter Life</a></li>
                        <li><a class="dropdown-item" href="{{ url('/dashboard')}}">Social Life</a></li>
                        <li><a class="dropdown-item" href="{{ url('/dashboard')}}">Polotical Life</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown">
                        Achievments
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Educational </a></li>
                        <li><a class="dropdown-item" href="#">Writter</a></li>
                        <li><a class="dropdown-item" href="#">Social $ Polotical</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown">
                        Gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">News</a></li>
                        <li><a class="dropdown-item" href="#">Events</a></li>
                        <li><a class="dropdown-item" href="#">Moments</a></li>
                        <li><a class="dropdown-item" href="#">Videos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/About-us')}}">Join us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Get in Touch</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- This is the body section of the page -->
{{$bodycode}}

<hr>
<footer class="py-1">
    <div class="container">
        <div class="row align-items-center">

            <!-- Quick Links (Center) -->
            <div class="col-md-12 text-center">
                <a href="#" class=" text-decoration-none me-3">Home</a>
                <a href="#" class=" text-decoration-none me-3">About</a>
                <a href="#" class=" text-decoration-none me-3">Help</a>
                <a href="#" class=" text-decoration-none">Contact</a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-3 fw-bold">
            <p class="mb-8">&copy; 2025 <kmamish class="info"></kmamish> All rights reserved to kmamish.info</p>
        </div>

        <div class="col-md-12 text-center"  style="height:20px">
    </div>
</footer>

<!-- Here i am add the canvas library -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
