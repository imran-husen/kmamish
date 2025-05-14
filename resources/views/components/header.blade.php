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
        <a href="{{ url('/admin/login')}}" class="d-flex align-items-center">
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
                        <li><a class="dropdown-item" href="{{ url('/Educational-life')}}">Education Life</a></li>
                        <li><a class="dropdown-item" href="{{url('/Writter-life')}}">Writter Life</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Social-life')}}">Social Life</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Polotical-life')}}">Polotical Life</a></li>
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
<footer class="custom-footer" style="font-family: Merriweather, serif;">
  <div class="container">
    <div class="footer-row">
      <!-- Menu Section -->
      <div class="footer-col">
        <h5>Menu</h5>
        <div class="menu-columns">
          <ul>
            <li>My Thoughts</li>
            <li>My Vision</li>
            <li>My Journey</li>
          </ul>
          <ul>
            <li>Videos</li>
            <li>News</li>
            <li>Get in Touch</li>
          </ul>
        </div>

        <!-- Newsletter -->
        <h5 class="newsletter-title">Newsletter</h5>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email" />
          <button type="submit">Subscribe</button>
        </form>
      </div>

      <!-- Contact Info & Social -->
      <div class="footer-col address">
        <h5>Address</h5>
        <p>A-44 Kailash Colony</p>
        <p>New Delhi - 110048</p>
        <p>Contact: 011-29248212, 011-29244587</p>
        <p>Email: office@arunjaitley.com</p>

        <div class="social-icons">
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-google-plus-g"></i>
        </div>
      </div>
    </div>
  </div>
</footer>
 <footer class="bg-dark text-white text-center py-2">
  <p>&copy; 2025 All rights reserved by kmamish.info</p>
</footer>


<!-- Here i am add the canvas library -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>
</body>
</html>
