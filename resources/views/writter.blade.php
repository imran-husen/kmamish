<x-header>
  <x-slot name="title">Home</x-slot>

  <x-slot name="bodycode">

  <!-- This is the body code of the section where i will write about of the writing related achievements -->
   <h4 class="text-center text-danger fw-bold text-warming m-1"> Writing and publication Achievements by KM Amish</h4>
   <p class="text-center fs-6 m-1"> This is the writing and publication Achievements by the KM Amish, Who has been achieved by the them in whole life. It is really a greate achievements in the writing and publication field</p>
  
<div class="container my-4">
  <div class="row justify-content-center">
    @foreach($writing as $item)
      <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center p-2">
        <div class="card writer-card text-center">
          <img src="{{ $item->image }}" class="card-img-top writer-image p-1" alt="{{ $item->title }}">
          <div class="card-body writer-body">
            <h5 class="card-title text-center fw-bold text-success" style="font-size:12px"><u>{{ Str::limit($item->description, 80, '...') }}</u></h5>
            <p class="card-text text-center" style="font-size:10px">{{ Str::limit($item->description, 150, '...') }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>


<!--  Here i am creating a link for the visiste the publication link -->
<div class="container my-4">
  <h5 class="text-center text-success fw-bold m-2">
    Official Website Link of Multidimensional Publishing House
  </h5>

  <p class="text-center">
    This is the official link to visit the official page of the Multidimensional Publishing House.
  </p>

  <div class="text-center mb-3">
    <a href="https://www.multidpublication.in/index.aspx" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
      Visit Link
    </a>
  </div>
</div>




   </x-slot>
</x-layout>