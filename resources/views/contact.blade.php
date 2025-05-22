<x-header>
  <x-slot name="title">Get-in-Touch</x-slot>

  <x-slot name="bodycode"> 
 
 <!-- this is the code of the body -->
  
<div class="container mt-3">
  <div class="text-center mb-2">
    <h1 class="contact-heading">Get in Touch with <span class="text-primary">K.M. Amish</span></h1>
    <p class="lead">Feel free to reach out for collaborations, queries, or to discuss educational and technological reforms.</p>
  </div>

  <div class="row justify-content-center m-2">
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
  </div>

  <!-- Contact Info -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-6 text-center">
      <h4 class="mb-1 text-danger fw-bold ">Admin Contact Details</h4>
      <p><strong>Email:</strong> president@bahuayamiparty.in</p>
      <p><strong>Phone:</strong> +91 9918422098</p>
      <p><strong>Address:</strong> Multidimensional Educational Technical & Research Society, Lucknow, Uttar Pradesh, India</p>
    </div>
  </div>

  <!-- Social Media -->
  <div class="text-center mt-2">
    <h5 class="text-secondary mb-3">Connect on Social Media</h5>
    <div class="social-icons">
      <a href="https://www.facebook.com/share/19UC62ADpK/" class="facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09" class="twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/k-m-amish-president-of-ngo-and-bahuayami-political-party-35a03598?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://www.instagram.com/multidimensional_party?igsh=MXM2emg2dGQ2Ync0bQ==  " class="instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://youtube.com/@multidimensionaleducationa4295?feature=shared" class="youtube"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</div>
 
   </x-slot>
</x-layout>