<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sizra Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Animation CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #ffffff);
            overflow: hidden;
        }

        /* Center Card */
        .sizra-card {
            position: relative;
            z-index: 5;
            animation: fadeInUp 1.5s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Bubble Animation */
        .bubble {
            position: absolute;
            bottom: -100px;
            background: rgba(13, 110, 253, 0.15);
            border-radius: 50%;
            animation: bubbleMove 18s infinite linear;
        }

        @keyframes bubbleMove {
            0% {
                transform: translateY(0) scale(0.8);
                opacity: 0;
            }
            50% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-120vh) scale(1.2);
                opacity: 0;
            }
        }

        /* Flower Animation */
        .flower {
            position: absolute;
            width: 16px;
            height: 16px;
            background: #ffc107;
            border-radius: 50%;
            animation: flowerFloat 14s infinite ease-in-out;
        }

        .flower::before,
        .flower::after {
            content: "";
            position: absolute;
            width: 16px;
            height: 16px;
            background: #ffc107;
            border-radius: 50%;
        }

        .flower::before {
            left: -10px;
        }

        .flower::after {
            top: -10px;
        }

        @keyframes flowerFloat {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* Animated Text */
        .typing {
            overflow: hidden;
            white-space: nowrap;
            animation: typing 4s steps(50, end);
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
    </style>
</head>

<body>

<!-- Bubbles -->
<div class="bubble" style="left:10%; width:40px; height:40px;"></div>
<div class="bubble" style="left:30%; width:25px; height:25px; animation-duration:22s;"></div>
<div class="bubble" style="left:60%; width:50px; height:50px; animation-duration:26s;"></div>
<div class="bubble" style="left:80%; width:20px; height:20px; animation-duration:20s;"></div>

<!-- Flowers -->
<div class="flower" style="left:20%; animation-duration:18s;"></div>
<div class="flower" style="left:50%; animation-duration:20s;"></div>
<div class="flower" style="left:75%; animation-duration:16s;"></div>

<!-- Main Content -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card sizra-card shadow-lg p-5 text-center">
        <h2 class="text-primary fw-bold mb-3">
            🌸 Welcome to Sizra Page 🌸
        </h2>

        <p class="typing text-muted fs-5">
            Sizra of the Khamish will be uploading soon.
        </p>

        <span class="badge bg-warning text-dark mt-4 px-4 py-2">
            🚧 Under Development
        </span>
    </div>
</div>

</body>
</html>

