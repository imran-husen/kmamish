<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- This is the code of the favicons of the website -->
       <link rel="icon" type="{{ asset('/image/main logo.png') }}" href="favicon.png">
       
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    
    <!-- Linking of the new google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
     <title>Succeful</title>
  <style>
    body {
      font-family: "Arima", system-ui;
      background-color: #000;
      color: white;
    }

    .success-box {
      text-align: center;
      padding: 30px;
      border-radius: 12px;
      background-color: rgba(25, 135, 84, 0.1);
      box-shadow: 0 0 15px rgba(0, 255, 0, 0.2);
      max-width: 400px;
      margin: 100px auto;
    }

    .cube-container {
      width: 80px;
      height: 80px;
      perspective: 800px;
      margin: 0 auto;
    }

    .cube {
      width: 100%;
      height: 100%;
      position: relative;
      transform-style: preserve-3d;
      animation: rotateCube 2s linear infinite;
    }

    .face {
      position: absolute;
      width: 80px;
      height: 80px;
      background: #198754;
      opacity: 0.9;
      border: 2px solid #0f5132;
    }

    .face.front  { transform: translateZ(40px); }
    .face.back   { transform: rotateY(180deg) translateZ(40px); }
    .face.right  { transform: rotateY(90deg) translateZ(40px); }
    .face.left   { transform: rotateY(-90deg) translateZ(40px); }
    .face.top    { transform: rotateX(90deg) translateZ(40px); }
    .face.bottom { transform: rotateX(-90deg) translateZ(40px); }

    @keyframes rotateCube {
      0%   { transform: rotateX(0deg) rotateY(0deg); }
      100% { transform: rotateX(360deg) rotateY(360deg); }
    }

    .message-text {
      display: none;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="success-box">
    <div class="cube-container" id="cube-container">
      <div class="cube">
        <div class="face front"></div>
        <div class="face back"></div>
        <div class="face right"></div>
        <div class="face left"></div>
        <div class="face top"></div>
        <div class="face bottom"></div>
      </div>
    </div>
    <div class="message-text" id="message">
      <h5 class="text-success mt-3">Your response  has been uploaded successfully!</h5>
      <a href="{{ url('/Admin-Login')}}" class="btn btn-outline-success mt-3">Return Login page</a>
    </div>
  </div>
</div>

<script>
  setTimeout(() => {
    document.getElementById('cube-container').style.display = 'none';
    document.getElementById('message').style.display = 'block';
  }, 2000); // 2 seconds
</script>

</body>
</html>

