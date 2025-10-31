<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Web Hotel</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar-brand i {
            color: #ffc107;
        }
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="fa fa-hotel"></i> Web Hotel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link"><i class="fa fa-home"></i> Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"><i class="fa fa-info-circle"></i> About</a></li>
                    <li class="nav-item"><a href="{{ route('rooms') }}" class="nav-link"><i class="fa fa-bed"></i> Available Rooms</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"><i class="fa fa-phone"></i> Contact</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-user-circle"></i> Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 border-top">
        <p class="mb-0">&copy; 2025 Web Hotel. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
