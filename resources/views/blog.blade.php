<x-header>
  <x-slot name="title">Blogging Page</x-slot>

  <x-slot name="bodycode">

  <!--  This is the blog page  -->
    <h4 class="text-center fw-bold text-success mt-2"> Your Welcome! on K.M. Amish Blog</h4>
    <p class="text-center fs-6"> This is official blog page of the K.M. Amish where you can read about the amish blog</p>

<div class="container my-1">
  <div class="row">
    @foreach($blog as $item)
      <div class="col-md-4 col-12 d-flex mt-2">
        <div class="blog-box">
          <div class="blog-title m-0">{{ $item->title }}</div>
          <div class="blog-date m-0">{{ \Carbon\Carbon::parse($item->created_at)->format('F d, Y') }}</div>
          <div class="blog-content m-0" style="font-size:10px">
            {{ $item->content }}
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

   </x-slot>
</x-layout>