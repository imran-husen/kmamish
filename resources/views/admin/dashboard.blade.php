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
  <div class="sidebar-links">
    <a href="#" data-section="dashboard" class="active"><i class="fas fa-home me-2"></i> Dashboard</a>
    <a href="#" data-section="join"><i class="fas fa-user-plus me-2"></i> Join Us</a>
    <a href="#" data-section="notifications"><i class="fas fa-bell me-2"></i> Notifications</a>
    <a href="#" data-section="feedback"><i class="fas fa-comments me-2"></i> Feedback</a>
    <a href="#" data-section="upload-news"><i class="fas fa-image me-2"></i> Upload News</a>
    <a href="#" data-section="blogging"><i class="fas fa-blog me-2"></i> Blogging</a>
    <a href="#" data-section="youtube"><i class="fab fa-youtube me-2"></i> YouTube Links</a>
    <a href="#" data-section="education"><i class="fas fa-graduation-cap me-2"></i> Education Achievements</a>
    <a href="#" data-section="writer"><i class="fas fa-pen-nib me-2"></i> Writer Achievements</a>
    <a href="#" data-section="social"><i class="fas fa-users me-2"></i> Social Achievements</a>
    <a href="#" data-section="political"><i class="fas fa-landmark me-2"></i> Political Achievements</a>
    <a href="#" data-section="newsletter"><i class="fas fa-envelope me-2"></i> Newsletter</a>
    <a href="#" data-section="events"><i class="fas fa-calendar-alt me-2"></i> Events</a>
    <a href="#" data-section="moments"><i class="fas fa-camera-retro me-2"></i>Movement</a><br><br>
  </div>
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
  <div class="row g-3 mb-4" data-section="upload-news">
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="fw-bold text-danger">Latest News</h5>
        <p class="text-muted">Recent headlines uploaded</p>
        <span class="badge bg-primary">{{ $totalnews }} Uploded News</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="fw-bold text-danger">YouTube Links</h5>
        <p class="text-muted">Total linked videos</p>
        <span class="badge bg-success">{{ $totalvideos }} Videos link</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="fw-bold text-danger">Blog Posts</h5>
        <p class="text-muted">Articles uploaded</p>
        <span class="badge bg-warning text-dark">{{ $totalblog }} written blog</span>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-4">
  <div class="col-md-4">
    <div class="card card-box p-3">
      <h5 class="fw-bold text-success">Total Joined Members</h5>
      <p class="text-muted">People registered on the platform</p>
      <span class="badge bg-info text-dark">{{ $totalJoinedUsers }} Joined Members</span>
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

<!-- This is the dynamic part of the updation -->
<h5 class="text-danger text-center fw-bold mb-4">For the User Dynamics page</5>
<div class="row g-3 mb-4 mt-1">
    <div class="col-md-4">
      <div class="info-card news-card">
        <h5 class="card-title">Education Achievements</h5>
        <p class="card-subtitle">Total Education achievements uploaded</p>
       <span class="card-badge bg-warning text-dark">{{ $totaledu }} Edu-Achievements</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card youtube-card">
        <h5 class="card-title"> Writing & Publication Achievements</h5>
        <p class="card-subtitle">Total wri-Pub achievements uploaded</p>
        <span class="card-badge bg-warning text-dark">{{ $totalwrite}} Publication Achievements</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card blog-card">
        <h5 class="card-title">Uploded Events</h5>
        <p class="card-subtitle">This is total uploded Events</p>
        <span class="card-badge bg-warning text-dark">{{ $totalEvents }} Uploded Events </span>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-4">
    <div class="col-md-4">
      <div class="info-card members-card">
        <h5 class="card-title">Total Social Achievements</h5>
        <p class="card-subtitle">Uploded socila achievements by Admin</p>
       <span class="card-badge bg-warning text-dark">{{ $totalsocial }} Social Image</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card feedback-card">
        <h5 class="card-title">Total Uploaded Plotical Achievements</h5>
        <p class="card-subtitle">Uploded Polotical Achievements by Admin</p>
        <span class="card-badge bg-warning text-dark">{{ $totalpolotics }} Uploded Content</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card notification-card">
        <h5 class="card-title">Uploded Movements & Campiegn </h5>
        <p class="card-subtitle">Total Uploded movements by the admin</p>
      <span class="card-badge bg-warning text-dark">{{  $totalmove }} Uplod Movements</span>
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
  <!-- This is the code of the upload news -->

  <h3 class="text-center fw-bold text-success">Upload News</h3>
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" style="border:1px solid grey; border-radius:15px; padding:20px">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter News Title" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
             <textarea class="form-control" name="description" id="fbMessage" rows="4" placeholder="Write your description here..." required></textarea>
        </div>
        <div class="mb-3">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>

  <!-- Here i am writing the code to show the uploaded news -->
     <h4 class="text-center fw-bold text-success mt-2">Uploaded News</h4>
     <p class="text-center"> Here this is your uploaded image where available all uploaded image news by using the click delete button you can delete any types of the news.</p>

     <!-- code to show the uploaded news -->
     <table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Sr</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Action</th> <!-- New Action Column -->
        </tr>
    </thead>
   <tbody>
    @forelse ($news as $index => $newsItem)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $newsItem->title }}</td>
        <td>{{ $newsItem->description }}</td>
        <td>
            @if($newsItem->image)
                <img src="{{ asset($newsItem->image) }}" width="100" alt="News Image">
            @else
                No Image
            @endif
        </td>
        <td>{{ $newsItem->created_at->format('d M Y') }}</td>
        <td>
            <form action="{{ route('news.destroy', $newsItem->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this news?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center">No News Found</td>
    </tr>
    @endforelse
</tbody>

</table>

</template>



<!-- this is the page of the blogging of the admin panles -->
<template id="blogging">
  <h3 class="text-center">Create New Blog</h3>
   <form action="{{ route('blogs.store') }}" method="POST" style="border:1px solid grey; border-radius:15px; padding:20px">
      @csrf
      <div class="mb-3">
        <label>Blog Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter title" required>
      </div>
      <div class="mb-3">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="5" placeholder="Write blog here..." required></textarea>
      </div>
      <button class="btn btn-warning text-dark">Publish</button>
    </form>


  <h4 class="text-center fw-bold text-danger mt-2"> List of the Uploded blog</h4>
  <p class="text-center fs-6">This is the list of the uploded bloging text where admin can download and delete on here.</p>

  <!--  table to shown the data of uploaded blog -->
    <div class="container mt-1">
  <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($blog->content, 50) }}</td>
                    <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                    <td>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Delete this blog?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">No blogs found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

</template>



<!-- this is the page of the youtube videos uploading -->
<template id="youtube">
  <h3 class="text-danger fw-bold">YouTube Video Upload</h3>
  <form action="{{ route('video.store') }}" method="POST" style="border:1px solid grey; border-radius:15px; padding:20px">
  @csrf
  <div class="mb-3">
    <label>Video Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter video title">
  </div>
  <div class="mb-3">
    <label>YouTube Link</label>
    <input type="url" name="link" class="form-control" placeholder="https://youtube.com/">
  </div>
  <button class="btn btn-success">Add Video</button>
</form>

  <!-- Here i am writing the code of the uloaded videos for shown -->
<h4 class="text-danger fw-bold text-center">YouTube Video Uploaded list</h4> 
<p class="text-center fs-6">This is the tables of teh those videos where alaivalble the link of those videos which have been uplodede by the user</p> 

<table class="table table-bordered table-hover mt-3">
  <thead class="table-dark">
    <tr>
      <th>Sr.</th>
      <th>Video Title</th>
      <th>YouTube Link</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
 <tbody id="videoTableBody">
    @forelse ($videos as $index => $video)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $video->title }}</td>
        <td><a href="{{ $video->link }}" target="_blank" class="text-decoration-none">Click Here to Show the added videos</a></td>
        <td>{{ $video->created_at->format('d M Y') }}</td>
        <td>
            <form method="POST" action="{{ url('/delete-video/' . $video->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="text-center">No video Found</td>
    </tr>
    @endforelse
</tbody>
</table>
</template>



<!-- This is the page to shown the newsletter publication  -->
<template id="newsletter">
  <h4 class="text-center text-damger">Newsletter Management</h4>
  <p class="text-center">Manage subscriptions, send updates, and configure newsletter settings.</p>

  <!-- Here i am creating the a tebls for the monitoring the mail -->
   <table class="table table-bordered table-striped table-hover mt-2">
  <thead class="table-dark">
    <tr>
      <th scope="col">Sr.</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($mail as $index => $mail)
<tr>
  <th scope="row">{{ $index + 1 }}</th>
  <td>{{ $mail->email }}</td>
  <td>{{ \Carbon\Carbon::now()->format('Y-m-d') }}</td>
</tr>
@endforeach
    <tr>
  </tbody>
</table>
</template>


<!-- This is the panels of the events -->
<template id="events">
  <h4 class="text-center text-danger fw-bold" >Events Panels</h4>
  <p class="text-center fs-6"> This is the events panle where admin can update teh any occasionans events data</p>
  <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" style="border:1px solid grey; border-radius:15px; padding:20px">
    @csrf
    <div class="mb-3">
        <label>Event Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Event Title" required>
    </div>
    <div class="mb-3">
        <label>Event Description</label>
        <textarea class="form-control" name="description" rows="4" placeholder="Write your event description here..." required></textarea>
    </div>
    <div class="mb-3">
        <label>Upload Event Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button class="btn btn-success">Submit Events</button>
</form>
    
<!--  Here i am going to the write code of the show the events list -->
  <h4 class="text-center fw-bold text-danger mt-2"> This is uploded events list</h4>
  <p class="text-center fs-6"> This is the tables of the those data which have uploded by the admin.</p>

   <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $index => $event)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>
                    @if($event->image)
                        <img src="{{ asset($event->image) }}" width="100" alt="Event Image">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</template>


<!-- Here i am again write the code of the education achivemts -->
<template id="education">
 <h4 class="text-center text-danger fw-bold" >Educational Achievments Panels</h4>
  <p class="text-center fs-6">This is your educational achievments panels where you can upload any achevments related your achication</p>
   <form action="{{ route('achievements.store') }}" method="POST" enctype="multipart/form-data" style="border:1px solid grey; border-radius:15px; padding:20px">
    @csrf

    <div class="mb-3">
        <label>Achievements Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Achievements Title" required>
    </div>

    <div class="mb-3">
        <label>Achievements Description</label>
        <textarea class="form-control" name="description" rows="4" placeholder="Write your Achievements description here..." required></textarea>
    </div>

    <div class="mb-3">
        <label>Upload Achievements Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-success">Submit Education Achievements</button>
</form>



<!-- this is tables -->
 <h4 class="text-center text-primary mt-2"> Uploded Education Achievements</h4>
 <p class="text-center fs-6"> This is table where you can show the uploded imane data and you can detete from here</p>
 <div class=" mt-2">
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Sr No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse($education as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>
                @if($item->image)
                <img src="{{ asset($item->image) }}" width="100" alt="News Image">
            @else
                No Image
            @endif
            </td>
            <td>
                <form action="{{ route('achievements.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this achievement?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center">No records found.</td>
        </tr>
    @endforelse
</tbody>

</table>

</div>

</template>

<!-- This is the schievements page of the writter -->
 <template id="writer">
 <h4 class="text-center text-danger fw-bold" >Writing and Publication Panels</h4>
  <p class="text-center fs-6">This is admin writing and publication panel, your you can upload any writing and publication.</p>
  <form method="POST" action="{{ route('writing.store') }}" enctype="multipart/form-data" style="border:1px solid grey; border-radius:15px; padding:20px; margin-bottom:30px;">
    @csrf
    <div class="mb-3">
        <label>Writing and Publication Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Writing and Publication Title" required>
    </div>
    <div class="mb-3">
        <label>Writing and Publication Description</label>
        <textarea class="form-control" name="description" rows="4" placeholder="Writing and Publication description here..." required></textarea>
    </div>
    <div class="mb-3">
        <label>Upload Writing and Publication Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button class="btn btn-success">Submit Writing & Publication</button>
</form>

<!-- This is the tables to shown tha data -->
<h4 class="text-center text-primary mt-2 fw-bold"> Uploded Writing and Publication Achievements</h4>
 <p class="text-center fs-6"> This is total writings and publication achievements that is aplodede by the admin.</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
       <tbody>
            @forelse($writings as $index => $writing)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $writing->title }}</td>
                    <td>{{ $writing->description }}</td>
                    <td>
                        @if($writing->image)
                            <img src="{{ asset($writing->image) }}" alt="Image" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('writings.destroy', $writing->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this writing?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No writings found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>


</template>


<!-- this is the page of the social achievements -->
  <template id="social">
 <h4 class="text-center text-danger fw-bold" >Social working and Achievements Panels</h4>
  <p class="text-center fs-6">By using the panel admin can upload the social working and achievements work that will be show on the frontend </p>
   <form action="{{ route('socials.store') }}" method="POST" enctype="multipart/form-data" style="border:1px solid grey; border-radius:15px; padding:20px; margin-bottom:30px;">
        @csrf
        <div class="mb-3">
            <label>Upload Social Working Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label>Social Working Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Social working Title" required>
        </div>
        <div class="mb-3">
            <label>Social Working Description</label>
            <textarea class="form-control" name="description" rows="4" placeholder="Social working description here..." required></textarea>
        </div>
        <button class="btn btn-success">Submit Social Events</button>
    </form>

    <!-- This is the tables to shown the data of the social Achievements -->
     <h4 class="text-center text-primary mt-2 fw-bold"> Uploded Social Working and Achievements</h4>
     <p class="text-center fs-6"> This is total working the data inside the social working and achievements. </p>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($socials as $index => $social)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $social->title }}</td>
                <td>{{ $social->description }}</td>
                <td>
                    @if($social->image)
                        <img src="{{ asset($social->image) }}" width="100" alt="Social Work Image">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <form action="{{ route('socials.destroy', $social->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this entry?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center">No records found.</td></tr>
            @endforelse
        </tbody>
    </table>

</template>


<!-- This is the page of the political achievements -->
  <template id="political">
 <h4 class="text-center text-danger fw-bold" >Polotical Achievements Panels</h4>
  <p class="text-center fs-6">By using the panel admin can upload the polotical achievements work that will be show on the frontend </p>
    <form action="{{ route('politics.store') }}" method="POST" enctype="multipart/form-data" style="border:1px solid grey; border-radius:15px; padding:20px; margin-bottom:30px;">
    @csrf
    <div class="mb-3">
        <label>Upload Political Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label>Political Title</label>
        <input type="text" name="title" class="form-control" placeholder="Political Title" required>
    </div>
    <div class="mb-3">
        <label>Political Description</label>
        <textarea class="form-control" name="description" rows="4" placeholder="Political description here..." required></textarea>
    </div>
    <button class="btn btn-primary">Submit Political Achievements</button>
</form>

    <!-- Here i am write the cod for the showing the data -->
      <h4 class="text-center text-primary mt-2 fw-bold"> Uploded Polotical Working and Achievements</h4>
     <p class="text-center fs-6"> This is total working the data inside the polotical working and polotical achievements.</p>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
       <tbody>
    @forelse($polotics as $index => $entry)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $entry->title }}</td>
        <td>{{ $entry->description }}</td>
        <td>
            @if($entry->image)
                <img src="{{ asset('politics/' . $entry->image) }}" width="100">
            @else
                No Image
            @endif
        </td>
        <td>
            <form action="{{ route('polotics.destroy', $entry->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr><td colspan="5" class="text-center">No entries found.</td></tr>
    @endforelse
</tbody>

    </table>


</template>

<!-- This is the page of the various types of the moments -->
  <template id="moments">
 <h4 class="text-center text-danger fw-bold" >Movement by run by admin</h4>
  <p class="text-center fs-6">By form you can submit where movements that will be shown in the frontan  </p>
   <form action="{{ route('moments.store') }}" method="POST" enctype="multipart/form-data" style="border:1px solid grey; border-radius:15px; padding:20px">
        @csrf
        <div class="mb-3">
            <label>Upload moments Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Moments Title</label>
            <input type="text" name="title" class="form-control" placeholder="moments Title" required>
        </div>
        <div class="mb-3">
            <label>Write Moments Description</label>
            <textarea class="form-control" name="description" rows="4" placeholder="Moments description here..." required></textarea>
        </div>
        <button class="btn btn-primary">Submit Event</button>
    </form>


    <!-- here i will shown the data of the movements -->
      <h4 class="text-center text-primary mt-2 fw-bold"> Uploded Movements and Campiegn</h4>
     <p class="text-center fs-6"> This is total uploded movements related achievements by the admn in the database</p>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>  
            </tr>
        </thead>
        <tbody>
            @forelse($move as $moment)
                <tr>
                    <td><img src="{{ asset($moment->image) }}" width="100" alt="Moment Image"></td>
                    <td>{{ $moment->title }}</td>
                    <td>{{ $moment->description }}</td>
                    <td>
                        <form action="{{ route('moments.destroy', $moment->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this moment?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">No moments uploaded yet.</td></tr>
            @endforelse
        </tbody>
    </table>



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
