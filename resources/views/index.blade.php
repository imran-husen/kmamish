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
        <h2 class="fw-bold display-6 text-dark mb-1">K.M. Amish </h2>
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


<!-- Ideology Box for Bhu Ayami Party -->
<div class="container my-2">
  <div class="ideology-container">
    <div class="card border-0" style="background-color: transparent;">
      <h1 class="ideology-heading text-center text-primary fw-bold" style="text-shadow: 1px 2px 4px black;">
        Ideology
      </h1>
      <div class="card-body" style="background-color: transparent;">
        <p class="text-center mt-0 text-dark fw-bold">
          Before defining multidimensional personality or Multidimensionalism, let us pay special attention to the following notion:
          The origin of the word Multidimensional comes from dimensions, dimensions, directions, For example, if we talk about Multidimensional, then we see that we are living in three directions, which we can speak in forward, backward, left, up, down. For example, if an insect is allowed to crawl on a thread, it will experience only one dimension, similarly if it is made to sit on a table, it will experience two dimensions if the same insect is allowed to fly. If he is free, then he will be able to experience the three directions.
          <span class="collapse" id="readMore1">
            Similarly, the definition of Multidimensionalism is being given, taking into account Multidimensional education, Multidimensional technology and Multidisciplinary research.
            If we talk about a Multidimensional personality, then one who has the ability to talk and act on many aspects at the same time which is referred to with any aptitude or conditions. Ability, Multidimensional curiosity, Multidimensional activities, Multidimensional limitless personality, Multidimensional spiritual growth, and Multidimensional personal development, Multidimensional knowledge, and universality of skills is the personality of a Multidimensional rationalist who continues to move forward in the bottomless ocean.
            Given the multifaceted talent
            It displays the versatility of Multidimensional knowledge, expanding the boundaries of versatility, freedom to choose the application point of effort, ability to learn from experiences, freedom from passivity and boringness, enjoyment from creativity and self-expression, envelopment of the surrounding environment, lives.
            Versatility requires that one strives to cultivate his personality by flaunting his knowledge, skills, educational taste, practice, labour, practical tools, of various fields.
            In short, it can be said that such a personality who has many dimensions, many thoughts, many levels, many angles, many directions, many magnitudes, many concepts, has a precise guidance.
            And last every person is the owner of a Multidimensional personality, without understanding its positive negative importance and identity, it seems impossible to bring peace in the society or the world, every Multidimensional personality is responsible for the change in the global social conditions.
            For example, if you and I are a Multidimensional personality and all my identities are Multidimensional in the right directions, then you and I will certainly be able to make a better miraculous change in the direction of peace and development in the world.
            If the direction is changed by mistake in making continuous progress, then surely the world will be bound to reach the point of collapse.
            (For example, Multidimensional science has shown by inventing the atomic bomb) And surely the Multidimensional personality will go on getting destroyed.
            If any work is done continuously without mistake and without difficulty, then it is considered an indicator of intellectual ability.
            Understanding the situation and circumstances of the present society, there is a need to make changes in education technology and research with important Multidimensional thinking
          </span>
        </p>
        <div class="d-flex justify-content-center my-1">
          <a class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" href="#readMore1" role="button" aria-expanded="false" aria-controls="readMore1">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</div>



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
                 <a href="{{ url('/News-Gallery') }}" class="text-primary text-decoration-none text-center" style="font-family: 'Poppins', sans-serif; font-size:12px;">{{ $news->title }}</a>
                <p class="card-text text-dark" style="font-size:8px; font-family: 'Poppins', sans-serif;">{{ Str::limit($news->description, 250, '...') }}</p>
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

<!-- Here i am going to create a  dive thar heights will be 50px where move some inportnat links -->
 <div class="gradient-box d-flex align-items-center cols-10">
  <div class="scrolling-links">
    <a href="https://www.multidpublication.in/society/index.aspx" class="link-box">बहुआयामी शिक्षा तकनीकी अनुसंधान एवं समिति के आधिकारिक वेबसाइट लिंक</a>
    <a href="https://www.multidpublication.in/index.aspx" class="link-box">बहुआयामी प्रकाशन हाउस की आधिकारिक वेबसाइट लिंक</a>
    <a href="https://news.multidpublication.in/" class="link-box">बहुआयामी समाचार की आधिकारिक वेबसाइट की लिंक </a>
    <a href="https://www.bahuayamiparty.in/" class="link-box">बहुआयामी पार्टी के आधिकारिक वेबसाइटकी लिंक </a>
  </div>
</div>

<!-- This is the code of the hyper link -->
 <h4 class="text-center fw-bold mt-1 text-danger">Importanat link</h4>
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


<!-- Here i am going to create a section for the publication writing achievements and scinetific gadgets -->

<div class="container my-2">
  <h4 class="text-center mb-2 fw-bold text-primary">Latest Event Images</h4>
   <p class="text-center fw-bold text-success">This photos is recently uploded by admin where the K.M. is recently participate in the  various events</p>
  <div class="viewport">
   <div class="cards-wrapper" id="cardsWrapper">
    @foreach ($latestpic as $pic)
        <div class="card-item">
            <img src="{{ asset($pic->image) }}" alt="Event Image">
        </div>
    @endforeach
   </div>
  </div>
</div>

<!-- Carousel Script (Auto-slide one card at a time) -->
<script>
  (function () {
    const wrapper = document.getElementById('cardsWrapper');
    const cardWidth = 320; // 300px + 20px gap
    let offset = 0;

    function slideCard() {
      wrapper.style.transform = `translateX(-${cardWidth}px)`;

      setTimeout(() => {
        const firstCard = wrapper.firstElementChild;
        wrapper.appendChild(firstCard);
        wrapper.style.transition = 'none';
        wrapper.style.transform = 'translateX(0)';
        void wrapper.offsetWidth; // force reflow
        wrapper.style.transition = 'transform 0.5s ease';
      }, 500);
    }

    setInterval(slideCard, 2500);
  })();
</script>
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