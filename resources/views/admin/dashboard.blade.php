<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
    
       <script src="{{ asset('javascript/main.js') }}"></script>

       <!-- This is the code of the favicons of the website -->
       <link rel="icon" type="{{ asset('/image/main logo.png') }}" href="favicon.png">
       
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    
    <!-- Linking of the new google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div class="logo">Admin Panel</div>
  <a href="#" data-section="dashboard" class="active"><i class="fas fa-home me-2"></i> Dashboard</a>
  <a href="#" data-section="join"><i class="fas fa-user-plus me-2"></i> Join Us</a>
  <a href="#" data-section="notifications"><i class="fas fa-bell me-2"></i> Notifications</a>
  <a href="#" data-section="feedback"><i class="fas fa-comments me-2"></i> Feedback</a>
  <a href="#" data-section="upload-news"><i class="fas fa-image me-2"></i> Upload News</a>
  <a href="#" data-section="blogging"><i class="fas fa-blog me-2"></i> Blogging</a>
  <a href="#" data-section="youtube"><i class="fab fa-youtube me-2"></i> YouTube Links</a>
  <a href="#" data-section="others"><i class="fas fa-ellipsis-h me-2"></i> Others</a>
</div>

<!-- Sidebar Toggle Button -->
<button class="btn btn-dark toggle-sidebar-btn" onclick="toggleSidebar()">
  <i class="fas fa-bars"></i>
</button>

<!-- Main Content -->
<div class="main-content" id="mainContent">
  <div id="contentArea"></div>
</div>

<!-- Hidden Templates -->
<template id="dashboard">
  <h4 class=" text-center fw-bold">Welcome! Mr. K.M. Amish</h4>
  <div class="row g-3 mb-4">
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="fw-bold text-danger">Latest News</h5>
        <p class="text-muted">Recent headlines uploaded</p>
        <span class="badge bg-primary">24 News</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="fw-bold text-danger">YouTube Links</h5>
        <p class="text-muted">Total linked videos</p>
        <span class="badge bg-success">13 Videos</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="fw-bold text-danger">Blog Posts</h5>
        <p class="text-muted">Articles uploaded</p>
        <span class="badge bg-warning text-dark">8 Blogs</span>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-4">
  <div class="col-md-4">
    <div class="card card-box p-3">
      <h5 class="fw-bold text-success">Total Joined Members</h5>
      <p class="text-muted">People registered on the platform</p>
      <span class="badge bg-info text-dark">{{ $totalJoinedUsers }} Join Members</span>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-box p-3">
      <h5 class="fw-bold text-success">Total Feedback</h5>
      <p class="text-muted">User feedback submitted</p>
      <span class="badge bg-secondary">{{ $totalfeedback }} User Feedback</span>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-box p-3">
      <h5 class="fw-bold text-success">Total Notifications</h5>
      <p class="text-muted">Alerts and announcements</p>
      <span class="badge bg-danger">{{ $totalnotification }} User Notification</span>
    </div>
  </div>
</div>
</template>

<!-- This is the page of shown the date of those user which is join us -->
<template id="join">
  <h4 class="text-center text-danger fw-bold" >Join Us Requests</h4>
  <p class="text-center"><u>This is is the data of those user which have join to you and fallow you from the lot of socila media</u></p>
   
  <!-- Here i am writing the code of the tables -->
   <div class="container mt-2">
  <div class="table-responsive">
    <table class="table table-hover table-bordered align-middle shadow-sm">
      <thead class="table-dark">
        <tr>
          <th scope="col">Sr. No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile Number</th>
          <th scope="col">Interest</th>
        </tr>
      </thead>
      <tbody>
        <!-- Example row -->
        <tr>
          
          @foreach ( $joinUser as $ju)
         <th>{{ $ju->id	}}</th>
         <td>{{ $ju->name}}</td>
         <td>{{ $ju->email }}</td>
         <td>{{ $ju->phone }}</td>
         <td>{{ $ju->interest }}</td>
        </tr>
        @endforeach
        <!-- Add more rows dynamically -->
      </tbody>
    </table>
  </div>
</div>


</template>

<template id="notifications">
  <h4 class=" text-center text-success fw-bold">Notifications Panel</h4>
  <p class="text-center">This is total notification, which is send by the user for the you and your team</p>

  <!-- Notification Section -->
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
    @foreach ($notification as $sms)
    <div class="col">
      <div class="card notification-card">
        <div class="card-body">
          <div class="notification-title">{{ $sms->name }}</div>
          <p class="mb-1" style="font-size: 10px">{{ $sms->message }}</p>
          <div class="notification-time">{{ $sms->created_at->format('d M Y') }}</div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</template>

<template id="feedback">
  <h3 class="text-center text-danger fw-bold">User Feedback</h3>
  <p class="text-center "><u>Here available the all review and feedback of the of the user that is given below. </u></p>

 <!-- Feedback Cards Section -->
<div class="container my-1">
  <div class="row">
    @foreach ($feedback as $review)
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h6 class="card-title text-center text-primary fw-bold">{{ $review->name }}</h6>
            <p class="card-subtitle mb-1 text-center text-success fw-bold">{{ $review->phone }}</p>
            <p class="card-text text-center" style="font-size:10px">{{ $review->message }}</p>
          </div>
          <div class="card-footer text-muted text-center">
            {{ $review->created_at->format('d M Y') }} 
          </div>
        </div>
      </div> 
    @endforeach
  </div>
</div>

</template>

<template id="upload-news">
  <h3>Upload News</h3>
  <form>
    <div class="mb-3">
      <label>Title</label>
      <input type="text" class="form-control" placeholder="Enter News Title">
    </div>
    <div class="mb-3">
      <label>Upload Image</label>
      <input type="file" class="form-control">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
</template>

<template id="blogging">
  <h3>Create New Blog</h3>
  <form>
    <div class="mb-3">
      <label>Blog Title</label>
      <input type="text" class="form-control" placeholder="Enter title">
    </div>
    <div class="mb-3">
      <label>Content</label>
      <textarea class="form-control" rows="5" placeholder="Write blog here..."></textarea>
    </div>
    <button class="btn btn-warning text-dark">Publish</button>
  </form>
</template>

<template id="youtube">
  <h3>YouTube Video Upload</h3>
  <form>
    <div class="mb-3">
      <label>Video Title</label>
      <input type="text" class="form-control" placeholder="Enter video title">
    </div>
    <div class="mb-3">
      <label>YouTube Link</label>
      <input type="url" class="form-control" placeholder="https://youtube.com/">
    </div>
    <button class="btn btn-success">Add Video</button>
  </form>
</template>

<template id="others">
  <h3>Other Tools & Settings</h3>
  <p>Additional administrative options.</p>
</template>

<!-- Script -->
<script>
  function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('show');
  }

  document.querySelectorAll('.sidebar a').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      // Toggle active class
      document.querySelectorAll('.sidebar a').forEach(l => l.classList.remove('active'));
      this.classList.add('active');

      // Load content
      const section = this.getAttribute('data-section');
      const template = document.getElementById(section);
      if (template) {
        document.getElementById('contentArea').innerHTML = template.innerHTML;
      } else {
        document.getElementById('contentArea').innerHTML = '<p class="text-danger">Section not found.</p>';
      }
    });
  });

  // Load dashboard by default
  window.addEventListener('DOMContentLoaded', () => {
    const defaultLink = document.querySelector('[data-section="dashboard"]');
    if (defaultLink) defaultLink.click();
  });
</script>

</body>
</html>
