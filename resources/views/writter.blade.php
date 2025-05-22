<x-header>
  <x-slot name="title">Home</x-slot>

  <x-slot name="bodycode">

  <!-- This is the body code of the section where i will write about of the writing related achievements -->
   <h4 class="text-center fw-bold text-warming mt-2"> Writing and publication Achievements by KM Amish</h4>
   <p class="text-center fs-6 "> This is the writing and publication Achievements by the KM Amish, Who has been achieved by the them in whole life. It is really a greate achievements in the writing and publication field</p>
  
<div class="container my-4">
  <div class="row justify-content-center g-4">
    @foreach($writing as $item)
      <div class="col-12 col-md-3 d-flex justify-content-center">
        <div class="card writer-card text-center">
          <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">{{ Str::limit($item->description, 150, '...') }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>


<!--  Here i am creating a link for the visiste the publication link -->
 <h5 class="text-center text-success fw-bold m-2">Official website link of Multidimensional Publishing House </h5>
 <p class="text-center"> This is the officila link for the visite of the official page of the Multidimensional Publishing House</p>
 <div class="text-center">
    <a href="https://www.multidpublication.in/index.aspx " class="btn btn-primary">
        Visit Link
    </a>
</div>


   </x-slot>
</x-layout>