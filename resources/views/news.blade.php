 <x-header>
  <x-slot name="title">News Gallery</x-slot>

  <x-slot name="bodycode">

  <!-- This is the news gallery where i am creating a section to write the code of the galery section -->
   <h4 class="text-center text-success fw-bold mt-3"> Welcome! in News Gallery</h4>
   <p class="text-center fs-6 mb-3"> This is the news gallery where you can read the lot of the news related to the KM Amish</p>

   <!-- Here i am creating the dynamics news section -->
<div class="container my-3">
  <div class="row justify-content-center g-4">
    @forelse ($news->reverse() as $item)
      <div class="col-12 col-lg-3 d-flex justify-content-center">
        <div class="custom-news-card card h-100">
          <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{ $item->title }}</h5>
            <p class="card-text news-description">
              {{ Str::limit($item->description, 150) }}
            </p>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12">
        <p>No news available.</p>
      </div>
    @endforelse
  </div>
</div>




     </x-slot>
</x-layout>
