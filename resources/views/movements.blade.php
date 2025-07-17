<x-header>
  <x-slot name="title">Socila work and Achievements</x-slot>

  <x-slot name="bodycode">
    
  <!-- This is teh body codes of the main section -->
    <header class="movement-header">
    <div class="container">
      <h1>Rise for Change: A Invent for the People</h1>
      <p>Together, we stand for science, technology, and a brighter future. Join the research team for a better tomorrow.</p>
      <a href="{{ url('/Contact-Us') }}" class="btn btn-warning text-dark fw-bold">Join Research Team</a>
    </div>
  </header>


  <!-- This is the dynamics cards -->
<div class="container my-4">
  <div class="row justify-content-center g-4">
    @foreach($move as $item)
      <div class="col-12 col-md-3 d-flex justify-content-center">
        <div class="card gadget-card text-center shadow-sm" style="width: 100%; max-width: 300px; height:350px; border-radius: 15px; transition: transform 0.3s, box-shadow 0.3s;">
          <div style="height: 200px; overflow: hidden; border-top-left-radius: 15px; border-top-right-radius: 15px; padding:5px;">
            <img src="{{ $item->image }}" alt="{{ $item->title }}" 
              class="card-img-top" 
              style="height: 100%; width: 100%; object-fit: cover; transition: transform 0.3s;">
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold" style="font-family: 'Arima', system-ui;">
              {{ \Illuminate\Support\Str::limit($item->title, 25, '...') }}
            </h5>
            <p class="card-text" style="font-size: 10px; font-family: 'Arima', system-ui;">
              {{ \Illuminate\Support\Str::limit($item->description, 150, '...') }}
            </p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

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