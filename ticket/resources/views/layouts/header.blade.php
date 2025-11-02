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
    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4 class="mb-4">Web Hotel</h4>
                    <p>Experience luxury and comfort in the heart of the city. Our hotel offers premium accommodations with world-class amenities.</p>
                    <div class="social-links mt-4">
                        <a href="#" class="text-white mr-3"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-white mr-3"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-white mr-3"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fa fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="mb-4">Contact Us</h4>
                    <p><i class="fa fa-map-marker mr-2"></i> 123 Luxury Street, City Center</p>
                    <p><i class="fa fa-phone mr-2"></i> +1 (555) 123-4567</p>
                    <p><i class="fa fa-envelope mr-2"></i> info@webhotel.com</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="mb-4">Newsletter</h4>
                    <p>Subscribe to our newsletter for special offers and updates.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email address">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">© 2025 Web Hotel. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" class="text-white mr-3">Privacy Policy</a>
                    <a href="#" class="text-white mr-3">Terms of Service</a>
                    <a href="#" class="text-white">Site Map</a>
                </div>
            </div>
        </div>
    </footer>

    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, #3498db, #e74c3c);
            border-radius: 2px;
        }
        
        /* Hero Section */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }
        
        /* Feature Cards */
        .feature-card {
            background: white;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .feature-icon {
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.2);
        }
        
        /* Room Showcase */
        .room-showcase {
            margin-bottom: 0;
        }
        
        .room-content {
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        /* Booking Form */
        .booking-card {
            overflow: hidden;
            border-radius: 15px;
        }
        
        .booking-form {
            background: rgba(0,0,0,0.8);
        }
        
        .btn-primary {
            background: linear-gradient(to right, #3498db, #2980b9);
            border: none;
            border-radius: 0px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(to right, #2980b9, #3498db);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Testimonials */
        .testimonial-card {
            background: white;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .badge-light {
            background-color: #f8f9fa;
            color: #495057;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .room-content, .room-image {
                height: 400px !important;
            }
            
            .display-3 {
                font-size: 2.5rem;
            }
            
            .display-4 {
                font-size: 2rem;
            }
        }
    </style>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
