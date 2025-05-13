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
      <a href="" target="_blank" class="me-2 text-dark"><i class="fab fa-twitter"></i></a>
      <a href="" target="_blank" class="me-2 text-dark"><i class="fab fa-facebook"></i></a>
      <a href="#" target="_blank" class="me-2 text-dark"><i class="fab fa-instagram"></i></a>
      <a href="" target="_blank" class="me-2 text-dark"><i class="fab fa-youtube"></i></a>
      <a href="" target="_blank" class="text-dark"><i class="fab fa-google-plus-g"></i></a>
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
      <img src="{{ asset('/image/slider 3.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slider 1.png')}}" class="d-block w-100" alt="...">
</div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slider 1.png')}}" class="d-block w-100" alt="...">
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
        <p class="lead text-light fw-bold" style=" font-size:15px; ">
          K. M. Amish was born on 30 May 1991 in a small farmer's family in the village of Usri-Piperjhala. 
          He began his education in a government school in Piperjhala, completed high school at District Panchayat Inter College Kasta, and went on to graduate from Yuvarajdatta Y.D.P.G. College..........
        </p>
        <a href="#" class="btn btn-primary btn-lg px-4 shadow-sm mt-1 mb-2">
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
          <a href="https://www.linkedin.com/in/k-m-amish-president-of-ngo-and-bahuayami-political-party-35a03598" target="_blank" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm d-flex align-items-center">
            <i class="fab fa-linkedin-in me-2"></i>LinkedIn
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>

<!-- Here i am going to write the code of the latest news updates -->
 <h3 class="text-center"> Latest News and You-Tube Videos link</h3>
<div class="container py-1">
  <div class="row">
    <!-- Left: Latest News -->
    <div class="col-lg-9">
      <div class="card-container">
        <!-- Desktop News -->
        <div class="row g-3 desktop-news">
          <div class="col-md-4">
            <div class="card news-card">
              <img src="{{ asset('/image/slider 3.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">News Title 1</h5>
                <p class="card-text">Short description for news article 1.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card news-card">
              <img src="{{ asset('/image/slider 3.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">News Title 2</h5>
                <p class="card-text">Short description for news article 2.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card news-card">
              <img src="{{ asset('/image/slider 3.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">News Title 3</h5>
                <p class="card-text">Short description for news article 3.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile News Carousel -->
        <div id="newsCarousel" class="carousel slide mobile-news" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card news-card">
                <img src="{{ asset('/image/slider 3.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">News Title 1</h5>
                  <p class="card-text text-center">Short description for news article 1.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card news-card">
                <img src="{{ asset('/image/slider 3.png')}}" class="card-img-top" alt="...">
                <div class="card-body ">
                  <h5 class="card-title text-center">News Title 2</h5>
                  <p class="card-text text-center">Short description for news article 2.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card news-card">
                <img src="{{ asset('/image/slider 3.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">News Title 3</h5>
                  <p class="card-text text-center">Short description for news article 3.</p>
                </div>
              </div>
            </div>
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
            <div class="mb-3">
              <iframe width="100%" height="180" src="https://www.youtube.com/embed/QTSxL27GzqA" allowfullscreen></iframe>
            </div>
            <div class="mb-3">
              <iframe width="100%" height="180" src="https://www.youtube.com/embed/sBws8MSXN7A" allowfullscreen></iframe>
            </div>
            <div class="mb-3">
              <iframe width="100%" height="180" src="https://youtu.be/sgyYzqW0cVw?si=HQ0I6D5UkD9Zrtc9" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

   </x-slot>
</x-layout>