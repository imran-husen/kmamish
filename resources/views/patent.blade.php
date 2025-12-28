<x-header>
  <x-slot name="title">About-us-of-Amish</x-slot>

  <x-slot name="bodycode">
    <!-- This is the code of the body parts -->
     <div class="text-center my-2">
    <h3 class="text-primary fw-bold">
        KMAMISH Copyrights and Patents
    </h3>
    <p class="fw-bold text-dark  text-center">
        Explore the innovative creations, protected works, and patented technologies developed by KMAMISH.  
        Stay informed about our intellectual property and the advancements driving innovation.
    </p>
</div>
<div class="container  py-2">
    <div class="row">

        @foreach($patents as $patent)
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">

            <div class="card shadow border-0 h-100">
                <div class="row g-0 align-items-center p-3">

                    <!-- LEFT IMAGE -->
                    <div class="col-md-4 text-center mb-3 mb-md-0">
                        <img src="{{ asset($patent->image) }}"
                             class="img-fluid rounded"
                             alt="Patent Image"
                             style="max-height:120px; object-fit:cover;">
                    </div>

                    <!-- RIGHT DETAILS -->
                    <div class="col-md-8">
                        <div class="card-body p-2">

                            <h5 class="text-primary fw-bold mb-2 text-center">
                                Description about patent and copyright
                            </h5>

                            <p class="mb-2">
                                {{ Str::limit($patent->description, 250, '...') }}
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        @endforeach

        {{-- Empty State --}}
        @if($patents->isEmpty())
            <div class="col-12 text-center text-muted">
                No patents available.
            </div>
        @endif

    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12">
        <p class="text-center">
            Patents are legal protections granted to inventors for their unique creations, ensuring exclusive rights to use, make, and sell their inventions for a specific period. There are various types of patents designed to protect different kinds of innovations. Utility patents cover new and useful processes, machines, or compositions of matter. Design patents protect the ornamental and visual appearance of a product. Plant patents are granted for new varieties of plants that are asexually reproduced. Together, these patent types encourage innovation by safeguarding intellectual property and motivating inventors to invest time, effort, and resources into developing new ideas that benefit society.
        </p>
    </div>
</div>


  </x-slot>
</x-layout>