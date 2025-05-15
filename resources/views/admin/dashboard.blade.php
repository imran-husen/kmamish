<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
  <h4>Welcome, Mr. K.M. Amish</h4>
  <div class="row g-3 mb-4">
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5>Latest News</h5>
        <p class="text-muted">Recent headlines uploaded</p>
        <span class="badge bg-primary">24 News</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5>YouTube Links</h5>
        <p class="text-muted">Total linked videos</p>
        <span class="badge bg-success">13 Videos</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5>Blog Posts</h5>
        <p class="text-muted">Articles uploaded</p>
        <span class="badge bg-warning text-dark">8 Blogs</span>
      </div>
    </div>
  </div>
</template>

<template id="join">
  <h3>Join Us Requests</h3>
  <p>Manage form submissions and applicant data.</p>
  
</template>

<template id="notifications">
  <h3>Notifications Panel</h3>
  <p>Send new announcements to users here.</p>
</template>

<template id="feedback">
  <h3>User Feedback</h3>
  <p>Review feedback messages submitted by users.</p>
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
