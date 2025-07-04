<x-header>
  <x-slot name="title">Upcomings events Details</x-slot>

  <x-slot name="bodycode">

  <!-- This is the body code of the events -->
      <!-- Header Section -->
  <header class="bg-primary text-white text-center py-5 mb-4">
    <div class="container">
      <h1 class="fw-bold">Events by KM. Amish</h1>
      <p class="lead">This is latest news updates from the KM. Amish</p>
    </div>
  </header>
<!-- This is code of the events cards -->

<div class="container my-4">
  <div class="row justify-content-center">
    @foreach($event as $event)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4">
        <div class="card events-card text-center">
          <img src="{{ asset($event->image) }}" class="card-img-top" alt="Event Image">
          <div class="card-body">
            <h5 class="card-title fw-bold text-danger text-center" style="font-size:12px ">{{ Str::limit($event->title, 45, '...') }}</h5>
            <p class="card-text text-center" style="font-size:10px ">{{ Str::limit($event->description, 150, '...') }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<!-- Fullscreen Image Modal -->
<div id="fullscreenImage" class="fullscreen-image" onclick="hideFullscreen()">
  <img id="fullscreenImg" src="" alt="Fullscreen View">
</div>

<!-- code of the js -->
 <script>
  document.querySelectorAll('.events-card img').forEach(img => {
    img.addEventListener('click', function () {
      document.getElementById('fullscreenImg').src = this.src;
      document.getElementById('fullscreenImage').style.display = 'flex';
    });
  });

  function hideFullscreen() {
    document.getElementById('fullscreenImage').style.display = 'none';
  }
</script>



<!-- Join page for the km Amish for the upcoming events -->
  <!-- Contact Info -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-6 text-center">
      <h4 class="mb-1 text-danger fw-bold m-2 ">Fallow the KM. Amish on Social Media</h4>
      <p><strong>Email:</strong> president@bahuayamiparty.in</p>
      <p><strong>Phone:</strong> +91 9918422098</p>
      <p><strong>Address:</strong> Multidimensional Educational Technical & Research Society, Lucknow, Uttar Pradesh, India</p>
    </div>
  </div>

  <!-- Social Media -->
  <div class="text-center mt-2">
    <h5 class="text-secondary mb-3">Connect on Social Media</h5>
    <div class="social-icons">
      <a href="https://www.facebook.com/share/19UC62ADpK/" class="facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09" class="twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/k-m-amish-president-of-ngo-and-bahuayami-political-party-35a03598?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://www.instagram.com/multidimensional_party?igsh=MXM2emg2dGQ2Ync0bQ==  " class="instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://youtube.com/@multidimensionaleducationa4295?feature=shared" class="youtube"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</div>


      </x-slot>
</x-layout>