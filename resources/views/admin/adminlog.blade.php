<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>

   <link rel="icon" type="{{ asset('/image/main logo.png') }}" href="favicon.png">
   
  <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet" />

  <!-- Linking of the new google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #667eea, #764ba2);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding:15px;
       font-family: "Arima", system-ui;
    }

    .login-container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .profile-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
      border: 3px solid #764ba2;
    }

    .admin-title {
      font-size: 24px;
      font-weight: bold;
      color: #764ba2;
      margin-bottom: 20px;
    }

    .form-control:focus {
      border-color: #667eea;
      box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    .btn-primary {
      background-color: #667eea;
      border-color: #667eea;
    }

    .btn-primary:hover {
      background-color: #5a67d8;
      border-color: #5a67d8;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <img src="{{ asset('/image/main logo.png') }}" alt="Admin Avatar" class="profile-img" />
    <div class="admin-title">Admin Login</div>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first('error') }}</div>
    @endif

    <form action="{{ route('Dashboard_Admin') }}" method="POST">
        @csrf
        <div class="mb-3 text-start">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="mail" id="email" placeholder="Enter email" required />
        </div>
        <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" id="password" placeholder="Password" required />
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>


</body>
</html>
