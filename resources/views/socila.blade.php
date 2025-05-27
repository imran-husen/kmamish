<x-header>
  <x-slot name="title">Socila work and Achievements</x-slot>

  <x-slot name="bodycode">

  <!-- This is the body code of the scocial page -->

     <h5 class="text-center fw-bold text-warming mt-2"> Social Working and  Achievements by KM Amish</h5>
     <p class="text-center fs-6 "> This is total and latest social working and Achievements by the kamaish. In the belos list you can see the the lot of Social work of the KM Amish</p>
    


<div class="container my-4">
  <div class="row justify-content-center g-4">

    <!-- Example cards; replace with Blade loop or dynamic backend rendering -->
     @foreach($social as $item)
    <div class="col-12 col-md-3 d-flex justify-content-center">
      <div class="card social-card text-center">
        <img src="{{ $item->image }}" alt="{{ $item->title }}" class="m-1">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Noto Sans Devanagari', sans-serif; font-weight: 700; font-size: 12px; color: #333;"> {{ Str::limit($item->description, 50, '...') }}</h5>
          <p class="card-text"  style="font-family: 'Noto Sans Devanagari', 'Poppins', sans-serif; font-weight: 700; font-size: 10px; color: #333;">{{ Str::limit($item->description, 150, '...') }}</p>
        </div>
      </div>
    </div>
     @endforeach
  </div>
</div>

<!-- Fullscreen overlay container -->
<div id="fullscreenImage" class="fullscreen-image" onclick="hideFullscreen()">
  <img id="fullscreenImg" src="" alt="Fullscreen View">
</div>


<!-- This is the js code -->
 <script>
  // Handle image click to fullscreen
  document.querySelectorAll('.social-card img').forEach(img => {
    img.addEventListener('click', function () {
      const fullscreenImg = document.getElementById('fullscreenImg');
      fullscreenImg.src = this.src;
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