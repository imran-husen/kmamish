<x-header>
  <x-slot name="title">Join-us</x-slot>

  <x-slot name="bodycode">

  <!-- Hero Section -->
<section class="hero-section m-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="fw-bold">Be a Part of K.M. Amish Army</h2>
        <p>
          K.M. Amish army group is the best group that always involve
          education, social and political environments.
        </p>
      </div>
    </div>
  </div>
</section>


<div class="container mt-0">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="form-row-wrapper">
        
        <!-- Paste your "Join Us" form here -->
      <div class="form-box bg-white p-4 rounded shadow-sm">
        <h3 class="text-center mb-4">Join Us With Me</h3>

        <!-- Validation Errors -->
        @if ($errors->join->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->join->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <!-- Success Message -->
        @if (session('join_success'))
        <div class="alert alert-success">
          {{ session('join_success') }}
        </div>
        @endif

        <form action="{{ route('join.store') }}" method="POST">
          @csrf

          <!-- Full Name & Phone Side-by-Side -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="joinName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="joinName" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="joinPhone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="joinPhone" name="phone" placeholder="Enter your phone number" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="joinEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="joinEmail" name="email" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <label for="joinInterest" class="form-label">Why do you want to join?</label>
            <textarea class="form-control" id="joinInterest" name="interest" rows="3" placeholder="Your reason or motivation..." required></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100">Join Now</button>
        </form>
      </div>

        <!-- Paste your "Notification" form here -->
  <div>
    <h4 class="text-center text-danger mb-4 fw-bold"><u>Send a Message to the Admin</u></h4>
        @if(session('success'))
          <div class="alert alert-success">
                  {{ session('success') }}
          </div>
        @endif 

     <form action="{{ route('contact.store') }}" method="POST" style="border:2px solid black; padding:13px; border-radius:15px">
        @csrf
      <div class="mb-3">
        
        <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" required />
      </div>
      <div class="mb-3">
        
        <input type="email" class="form-control" id="email"  name="email" placeholder="example@domain.com" required />
      </div>
      <div class="mb-3">
     
        <textarea class="form-control" id="message" rows="5" name="message" placeholder="Write your message here..." required></textarea>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-send">Send Message</button>
      </div>
    </form>
</div>
      </div>
    </div>
  </div>
</div>


  <!-- Here i am creating the contacts idons to contact the km amish sir -->
  <section class="text-center mt-2">
    <h4>Direct call Whattsapp and E-mail</h4>
    <p>This is the link where you can click and direct call to the K.M. Amish anytime and anywhere. </p>
  </section>
  <div class="container text-center contact-icons">
    <!-- Call Icon -->
    <a href="tel:+919918422098" class="icon-btn call-icon" title="Call KM Amish">
      <i class="bi bi-telephone-fill"></i>
    </a>

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/919918422098" target="_blank" class="icon-btn whatsapp-icon" title="WhatsApp KM Amish">
      <i class="bi bi-whatsapp"></i>
    </a>

    <!-- WhatsApp Icon -->
    <a href="mailto:president@bahuayamiparty.in" class="icon-btn email-icon" title="Email KM Amish">
      <i class="bi bi-envelope-fill"></i>
    </a>
  </div>


 </x-slot>
</x-layout>
