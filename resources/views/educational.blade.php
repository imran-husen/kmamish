<x-header>
  <x-slot name="title">Educational-Achievements</x-slot>

  <x-slot name="bodycode">

   <!-- This is body code -->
    <h6 class="text-success text-center mt-3 fw-bold">Educationala Achievements Page of K.M. Amish </h6>
    <p class="text-center"> Your welcome on here theb K.M. Amish educational Achievements where various types of the education achievements uploded by the admin.</p><hr>
    <h5 class="text-center fw-bold text-primary"> <u>Education-Award and Cirtificates list</u></h5>

<div class="container py-4">
  <div class="row g-4">
    @foreach ($edu as $item)
      <div class="col-12 col-md-6 col-lg-3">
        <div class="achievement-card">
          <img src="{{ asset($item->image) }}" class="card-img-top" alt="Achievement Image">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">{{ $item->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>


    </x-slot>
</x-layout>