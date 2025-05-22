<x-header>
  <x-slot name="title">You-Tube video Gallery</x-slot>

  <x-slot name="bodycode">
  <!--  i will write the code for the  -->
    <h5 class="text-center text-danger fw-bold mt-3"> YouTube Videos Gallery</h5>
    <p class="text-center fs-6 mb-3">This is the all videos link to relate the KM Amish, Where you can touch and watch on the webpage.</p>


    <!-- Here i am write teh code for teh run the videos -->
<div class="container py-2">
  <div class="row justify-content-center g-4">
    @foreach($link as $video)
      <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center">
        <div class="video-box1">
          <iframe 
            src="{{ $video->link }}" 
            allowfullscreen>
          </iframe>
        </div>
      </div>
    @endforeach
  </div>
</div>


   </x-slot>
</x-layout>
