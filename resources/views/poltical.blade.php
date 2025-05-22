<x-header>
  <x-slot name="title">Socila work and Achievements</x-slot>

  <x-slot name="bodycode">

  <!-- This is the body code of the scocial page -->

     <h5 class="text-center fw-bold text-warming mt-2"> Polotical Working and  Achievements by KM Amish</h5>
     <p class="text-center fs-6 "> this is page you can get always updates regarding the polotical awareness and polical achievements of the KM Amish</p>
     

     <div class="container my-4">
  <div class="row justify-content-center g-4">
    @foreach($polo as $item)
      <div class="col-12 col-md-3 d-flex justify-content-center">
        <div class="card writer-card text-center">
          <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text" style="font-size:10px">{{ Str::limit($item->description, 150, '...') }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
 
 
    </x-slot>
</x-layout>