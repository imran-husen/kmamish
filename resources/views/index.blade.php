<x-header>
  <x-slot name="title">Home</x-slot>

  <x-slot name="bodycode">
    <!-- I am writing the create the hesder section -->
     <!-- Bootstrap 5 Header Clone with Transparent Background -->
<header id="top-header" class="mb-1">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Logo Section -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-1 mb-sm-0">
        <div class="logo">
          <a href="">
            <img src="{{asset('/image/main name.png')}}" alt="Arun Jaitley" class="img-fluid">
          </a>
        </div>
      </div>

<!-- Social Media + Search -->
<div class="col-lg-8 col-md-8 col-sm-6 col-12 text-center text-sm-end mb-2">
  
  <!-- Wrapper for social + search -->
  <div class="d-inline-block w-100 w-sm-auto">
    
    <!-- Social Media Icons -->
    <div class="mb-2 d-flex justify-content-center justify-content-sm-end flex-wrap">
      <a href="https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09" target="_blank" class="me-2 text-dark"><i class="fab fa-twitter"></i></a>
      <a href="https://www.facebook.com/share/19UC62ADpK/" target="_blank" class="me-2 text-dark"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/multidimensional_party?igsh=MXM2emg2dGQ2Ync0bQ==  " target="_blank" class="me-2 text-dark"><i class="fab fa-instagram"></i></a>
      <a href="https://youtube.com/@multidimensionaleducationa4295?feature=shared" target="_blank" class="me-2 text-dark"><i class="fab fa-youtube"></i></a>
    </div>

    <!-- Search Form -->
    <form class="d-flex justify-content-center justify-content-sm-end" role="search" method="get" action="">
      <input type="search" name="s" class="form-control form-control-sm me-2" placeholder="Search …" title="Search for:">
      <button type="submit" class="btn btn-sm btn-outline-secondary">Search</button>
    </form>

  </div>
</div>


<!-- This is the slider image that will be slide on the home page only in mobile view -->
     <!-- Here i am going to the write the code of the crousel image -->
       <div id="carouselExampleAutoplaying" class="carousel slide my-0 d-block d-lg-none" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/image/slider-1.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slider-2.png')}}" class="d-block w-100" alt="...">
</div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slider-3.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<section class="py-2" >
  <div class="container">
    <!-- Heading -->
    <div class="row justify-content-center mb-1">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="fw-bold display-6 text-dark mb-1">K.M. Amish Khan</h2>
        <p class="lead text-dark fw-bold" style=" font-size:15px; ">
          K. M. Amish was born on 30 May 1991 in a small farmer's family in the village of Usri-Piperjhala. 
          He began his education in a government school in Piperjhala, completed high school at District Panchayat Inter College Kasta, and went on to graduate from Yuvarajdatta Y.D.P.G. College..........
        </p>
        <a href="{{ url('/About-Us') }}" class="btn btn-primary btn-lg px-4 shadow-sm mt-1 mb-2">
          Learn More &rarr;
        </a>
      </div>
    </div>

    <!-- Social Links -->
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="https://www.facebook.com/share/19UC62ADpK/" target="_blank" class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm d-flex align-items-center">
            <i class="fab fa-facebook-f me-2"></i>Facebook
          </a>
          <a href="https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09" target="_blank" class="btn btn-outline-info rounded-pill px-4 py-2 shadow-sm d-flex align-items-center">
            <i class="fab fa-twitter me-2"></i>Twitter
          </a>
          <a href="https://www.linkedin.com/in/k-m-amish-president-of-ngo-and-bahuayami-political-party-35a03598?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm d-flex align-items-center">
            <i class="fab fa-linkedin-in me-2"></i>LinkedIn
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<hr> 

<!-- Social Icons - Visible on Mobile Only -->
<div class="d-md-none">
  <div class="social-icons-mobile">
    <a href="https://www.facebook.com/share/19UC62ADpK/" class="icon fb"><i class="fab fa-facebook-f"></i></a>
    <a href="https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09" class="icon tw"><i class="fab fa-twitter"></i></a>
    <a href="https://www.linkedin.com/in/k-m-amish-president-of-ngo-and-bahuayami-political-party-35a03598?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="icon ln"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.instagram.com/multidimensional_party?igsh=MXM2emg2dGQ2Ync0bQ==  " class="icon ig"><i class="fab fa-instagram"></i></a>
    <a href="https://youtube.com/@multidimensionaleducationa4295?feature=shared" class="icon yt"><i class="fab fa-youtube"></i></a>
  </div>
</div>


<!-- Here i am going to write the code of the latest news updates -->
 <h3 class="text-center text-danger fw-bold"> Latest News and You-Tube Videos link</h3>
<div class="container py-1">
  <div class="row">
    <!-- Left: Latest News -->
    <div class="col-lg-9">
      <div class="card-container">
        <!-- Desktop News -->
       <div class="row g-3 desktop-news">
    @foreach ($latestNews as $news)
    <div class="col-md-4">
        <div class="card news-card">
            @if ($news->image)
                <img src="{{ asset($news->image) }}" class="card-img-top" alt="{{ $news->title }}">
            @else
                <img src="{{ asset('/image/slider 3.png') }}" class="card-img-top" alt="Default image">
            @endif
            <div class="card-body">
                 <a href="{{ url('/News-Gallery') }}" class="text-primary text-decoration-none text-center fw-bold">{{ $news->title }}</a>
                <p class="card-text text-dark" style="font-size:8px;">{{ Str::limit($news->description, 100, '...') }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
      <!-- Mobile News Carousel -->
<div id="newsCarousel" class="carousel slide mobile-news" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach ($latestNews as $index => $news)
    <div class="carousel-item @if ($index == 0) active @endif">
      <div class="card news-card">
        @if ($news->image)
             <img src="{{ asset($news->image) }}" class="card-img-top" alt="{{ $news->title }}">
        @else
          <img src="{{ asset('/image/slider 3.png') }}" class="card-img-top" alt="Default image">
        @endif
        <div class="card-body">
            <a href="{{ url('/News-Gallery') }}" class="text-primary text-decoration-none text-center fw-bold"> {{ $news->title }}</a>
          <p class="card-text text-dark text-center" style="font-size:8px;">{{ Str::limit($news->description, 100, '...') }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>



      </div>
    </div>

    <!-- Right: YouTube Videos -->
    <div class="col-lg-3">
  <div class="youtube-box">
    <h5 class="text-center mb-3 fw-bold text-danger">YouTube Videos</h5>
    <div class="scroll-box">
      <div class="scroll-content">
        @foreach($latestvideos as $video)
          <div class="mb-3">
            <iframe width="100%" height="180" src="{{ $video->link }}" allowfullscreen></iframe>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>


<!-- This is the code of the hyper link -->
 <h4 class="text-center fw-bold mt-1">Importanat link</h4>
 <p class="text-center">This is the important link of thr KM Amish, where available various types of the reseach and their publication</p>
 <div class="container text-center mb-3">
  <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
    
    <!-- Google Scholar Button -->
    <a href="https://scholar.google.com/citations?user=UNIQmCUAAAAJ&hl=en" class="google-btn google-scholar" target="_blank">
      <i class="fas fa-graduation-cap"></i>
      Google Scholar
    </a>

    <!-- Google Researcher Button -->
    <a href="https://www.researchgate.net/profile/Mohd-Khan-233/research" class="google-btn google-researcher" target="_blank">
      <i class="fas fa-flask"></i>
      Google Researcher
    </a>

    <a href="https://multidpublication.blogspot.com/ " class="google-btn google-blogging" target="_blank">
  <i class="fas fa-pen-nib"></i>
  blogging
</a>
</div>


<!-- Here i am going to th write the code for the writing and publication shown in the desktop  -->


<!-- Feedback Form Section -->
<div class="container mt-4 mb-2">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="form-box1 p-4 shadow rounded bg-white">
        <h3 class="text-center mb-4 fw-bold text-danger">Give Us Your Feedback</h3>

        @if(session('success_feedback'))
        <div class="alert alert-success">{{ session('success_feedback') }}</div>
        @endif

        <form action="{{ route('feedback.store') }}" method="POST">
          @csrf
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="fbName" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="fbName" placeholder="Your name" required>
            </div>
            <div class="col-md-6">
              <label for="fbPhone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" name="phone" id="fbPhone" placeholder="Your phone number" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="fbMessage" class="form-label">Your Feedback</label>
            <textarea class="form-control" name="message" id="fbMessage" rows="4" placeholder="Share your thoughts..." required></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success px-4">Submit Feedback</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>



<!-- Here i am creating the contacts idons to contact the km amish sir -->
  <section class="text-center mt-3">
    <h4 class="fw-bold" >Direct call, Whattsapp and E-mail</h4>
    <p>This is the link where you can click and direct call to the K.M. Amish anytime and anywhere. </p>
  </section>
  <div class="container text-center contact-icons">
    <!-- Call Icon -->
    <a href="tel:+919918422098" class="icon-btn call-icon" title="Call KM Amish">
      <i class="bi bi-telephone-fill"></i>
    </a>

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/919918422098" target="_blank" class="icon-btn whatsapp-icon" title="WhatsApp KM Amish">
      <i class="bi bi-whatsapp"></i>
    </a>

    <!-- WhatsApp Icon -->
    <a href="mailto:president@bahuayamiparty.in" class="icon-btn email-icon" title="Email KM Amish">
      <i class="bi bi-envelope-fill"></i>
    </a>
  </div>

  

   </x-slot>
</x-layout>