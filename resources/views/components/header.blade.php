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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    
    <!-- Linking of the new google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}" />
    <title>{{$title}}</title>

    <meta name="description" content="{{$meta_description ?? 'Default description of your website goes here'}}">
    <meta name="keywords" content="{{$meta_keywords ?? 'politics, education, society, biography, achievements'}}">
    <meta name="author" content="K Mamish">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{$title ?? 'Your Website Title'}}">
    <meta property="og:description" content="{{$meta_description ?? 'Default description of your website'}}">
    <meta property="og:image" content="{{ asset('image/main logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Search engine instructions -->
    <meta name="robots" content="index, follow">

    <!-- Website author -->
    <meta name="author" content="K. Mamish">

    <!-- Subject of website -->
    <meta name="subject" content="Official Website of K. Mamish">

    <!-- Description of this specific page -->
    <meta name="description" content="Explore the life journey of K. Mamish including education, social work, and political achievements.">

    <!-- Open Graph / Social Media Preview -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="K. Mamish | Official Website">
    <meta property="og:description" content="Official portal of K. Mamish - Education, Politics, Social Life & Achievements.">
    <meta property="og:image" content="{{ asset('image/main logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="kmamish.info">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K. Mamish | Official Website">
    <meta name="twitter:description" content="Get insights into the educational and political journey of K. Mamish.">
    <meta name="twitter:image" content="{{ asset('image/main logo.png') }}">
    <meta name="twitter:site" content="https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09e"> <!-- Replace with actual handle -->

</head>
<body>

<nav class="navbar navbar-expand-lg" style="background: linear-gradient(135deg,rgb(75, 154, 239),rgb(206, 200, 218));">
    <div class="container-fluid">
        <!-- Toggle Button (Left Side) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Profile Icon (Right Corner) -->
        <a href="{{ url('/Admin-Login')}}" class="d-flex align-items-center">
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
                        About-Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/About-Us') }}">About of K.M. Amish</a></li>
                        <li><a class="dropdown-item" href="{{  route('family')  }}">Family Background</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown">
                        Achievments
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/Educational-Achievements')}}">Educational-Achievements </a></li>
                        <li><a class="dropdown-item" href="{{ url('/Writings-Achievements') }}">Writing and publication</a></li>
                         <li><a class="dropdown-item" href="{{ url('/Latest-Movements-By-KM-Amish') }}">Scientific Gadgets</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Social-Working-and-Achievements')}}">Social Work and Achievements</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Polotical-Working-and-Achievements')}}">Polotical Achievements</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown">
                        Gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/News-Gallery')}}">News Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Grand-Events-By-KM-Amish')}}">Events Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Video-Gallery')}}">Videos Gallery</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Join-us')}}">Join us</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Blogging-Page')}}">blog page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Contact-Us') }}">Get in Touch</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- This is the body section of the page -->
{{$bodycode}}
<footer class="text-white pt-5 pb-4" style="background-color: #111;">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <!-- Menu Section -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
        <h5 class="text-uppercase fw-bold mb-4">Menu</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-white-50 d-block mb-2">My Thoughts</a></li>
          <li><a href="#" class="text-decoration-none text-white-50 d-block mb-2">My Vision</a></li>
          <li><a href="#" class="text-decoration-none text-white-50 d-block mb-2">My Journey</a></li>
          <li><a href="#" class="text-decoration-none text-white-50 d-block mb-2">Videos</a></li>
          <li><a href="#" class="text-decoration-none text-white-50 d-block mb-2">Get in Touch</a></li>
        </ul>
      </div>

      <!-- Contact & Address Section -->
      <div class="col-md-9 col-lg-9 col-xl-9 mx-auto">
        <h5 class="text-uppercase fw-bold mb-4">Contact Information</h5>

        <div class="row">
          <!-- Primary Address -->
          <div class="col-md-6 mb-4">
            <h6 class="fw-bold text-light">Head Office</h6>
            <p><i class="fas fa-map-marker-alt me-2"></i> Lucknow, Uttar Pradesh</p>
            <p><i class="fas fa-home me-2"></i> H No. 116, Hargaon Rd, Usari Piperjhala</p>
            <p><i class="fas fa-phone me-2"></i> +91 9918422098</p>
            <p><i class="fas fa-envelope me-2"></i> president@bahuayamiparty.in</p>
          </div>

          <!-- Secondary Address -->
          <div class="col-md-6">
            <h6 class="fw-bold text-light">Branch Office</h6>
            <p><i class="fas fa-map-marker-alt me-2"></i> Land No 27, Gram Panchayat, Banshigarhi Bhattkherwa,
              Bahuayami Chauraha Jehta Mall Road, Near Rising Sun Millennium School,
              Block, Thana Kakori, Pin (226102),
              Kisan Path, Outer Ring Road, Lucknow, U.P. INDIA</p>
            <p><i class="fas fa-phone me-2"></i> 0522-2731211, 9918422098</p>
          </div>
        </div>

        <!-- Social Media Icons -->
        <div class="mt-4">
          <a href="#" class="text-white me-3 fs-5"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-3 fs-5"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-3 fs-5"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white me-3 fs-5"><i class="fab fa-youtube"></i></a>
          <a href="#" class="text-white fs-5"><i class="fab fa-google-plus-g"></i></a>
        </div>
      </div>
    </div>

    <hr class="my-4 text-white-50" />

    <!-- Footer Bottom -->
    <div class="row align-items-center">
      <div class="col text-center">
        <p class="mb-0 text-white-50">
          &copy; 2025 All rights reserved by 
          <a href="#" class="text-decoration-none text-light fw-semibold">kmamish.info</a>
        </p>
      </div>
    </div>
  </div>
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "K. Mamish",
  "url": "{{ url('/') }}",
  "image": "{{ asset('image/main logo.png') }}",
  "jobTitle": "Social Worker and Writer",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Lucknow",
    "addressRegion": "Uttar Pradesh",
    "addressCountry": "India"
  },
  "sameAs": [
    "https://facebook.com/your_profile",
    "https://twitter.com/your_profile",
    "https://instagram.com/your_profile"
  ]
}
</script>

</body>
</html>
