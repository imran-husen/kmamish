<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notifications</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .notification-card {
      border-left: 5px solid #0d6efd;
      transition: all 0.3s ease;
      background-color: #f8f9fa;
    }
    .notification-card.read {
      border-left-color: #6c757d;
      background-color: #ffffff;
    }
    .notification-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
    .notification-title {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 5px;
    }
    .notification-time {
      font-size: 0.85rem;
      color: #6c757d;
    }
  </style>
</head>
<body>

<div class="container py-4">
  <h3 class="text-center mb-4">User Notifications</h3>
  <div class="row g-3">

    <!-- Notification 1 (Unread) -->
    <div class="col-md-6 col-lg-4">
      <div class="card notification-card">
        <div class="card-body">
          <div class="notification-title">Welcome to Worked.site!</div>
          <p class="mb-2">Your account has been activated. You can now start tasks.</p>
          <div class="notification-time">5 minutes ago - Unread</div>
        </div>
      </div>
    </div>

</body>
</html>
