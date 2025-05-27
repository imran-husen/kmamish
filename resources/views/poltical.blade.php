<x-header>
  <x-slot name="title">Socila work and Achievements</x-slot>

  <x-slot name="bodycode">

  <!-- This is the body code of the scocial page -->

     <h5 class="text-center fw-bold text-warming mt-2"> Polotical Working and  Achievements by KM Amish</h5>
     <p class="text-center fs-6 "> this is page you can get always updates regarding the polotical awareness and polical achievements of the KM Amish</p>
     

     <!-- this is the cards of the polotical update data -->

<div class="container my-4">
  <div class="row justify-content-center g-4">
   @foreach($polo as $item)
    <!-- Example Card -->
    <div class="col-12 col-md-3 d-flex justify-content-center">
      <div class="card polotics-card text-center">
        <img src="{{ $item->image }}" alt="{{ $item->title }}" class="m-1">
        <div class="card-body">
          <h5 class="card-title fw-bold" style="font-size:12px">{{ Str::limit($item->description, 45, '...') }}</h5>
          <p class="card-text" style="font-size:10px">{{ Str::limit($item->description, 150, '...') }}</p>
        </div>
      </div>
    </div>
    @endforeach
    <!-- Add more cards here by duplicating the above div -->
  </div>
</div>

<!-- Fullscreen Image Modal -->
<div id="fullscreenImage" class="fullscreen-image" onclick="hideFullscreen()">
  <img id="fullscreenImg" src="" alt="Fullscreen View">
</div>

<script>
  document.querySelectorAll('.polotics-card img').forEach(img => {
    img.addEventListener('click', function () {
      document.getElementById('fullscreenImg').src = this.src;
      document.getElementById('fullscreenImage').style.display = 'flex';
    });
  });

  function hideFullscreen() {
    document.getElementById('fullscreenImage').style.display = 'none';
  }
</script>
 
 
    </x-slot>
</x-layout>