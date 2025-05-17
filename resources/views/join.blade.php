<x-header>
  <x-slot name="title">Home</x-slot>

  <x-slot name="bodycode">

  <!-- Hero Section -->
  <section class="hero-section m-3 text-center">
    <h2 class="fw-bold">Be a Part of K.M. Amish Army</h2>
    <p>K.M. Amish army group is the best group that always involve education, social and polotical environments.</p>
  </section>

  <!-- Join Us Form -->
    <div class="col-md-6 m-2">
      <div class="form-box">
        <h3 class="text-center mb-4">Join Us With Me</h3>
                                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                  <!-- Display Success Message -->
                  @if (session('success'))                  
                       <div class="alert alert-success">
                          {{ session('success') }}
                         </div>
                  @endif
        <form action="{{ route('join.store') }}" method="POST">
              @csrf
             <div class="mb-3">
          <label for="joinName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="joinName" name="name" placeholder="Enter your full name" required>
            </div>
          <div class="mb-3">
          <label for="joinEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="joinEmail" name="email" placeholder="Enter your email" required>
         </div>
        <div class="mb-3">
        <label for="joinPhone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="joinPhone" name="phone" placeholder="Enter your phone number" required>
        </div>
       <div class="mb-3">
        <label for="joinInterest" class="form-label">Why do you want to join?</label>
        <textarea class="form-control" id="joinInterest" name="interest" rows="3" placeholder="Your reason or motivation..." required></textarea>
           </div>
      <button type="submit" class="btn btn-primary">Join Now</button>
      </form>

      </div>
    </div>

  <!-- Notification Form -->
  <section class="form-wrapper m-2 text-center">
    <h4 class="text-center text-primary mb-4">Send a Message to the Admin</h4>
        @if(session('success'))
        <div class="alert alert-success">
                  {{ session('success') }}
        </div>
        @endif 

     <form action="{{ route('contact.store') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Your Full Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email"  name="email" placeholder="example@domain.com" required />
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Your Message</label>
        <textarea class="form-control" id="message" rows="5" name="message" placeholder="Write your message here..." required></textarea>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-send">Send Message</button>
      </div>
    </form>
  </section>

  <!-- Here i am creating the contacts idons to contact the km amish sir -->
  <section class="text-center">
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
