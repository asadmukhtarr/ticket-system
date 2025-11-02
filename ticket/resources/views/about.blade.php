@extends('layouts.header')
@section('title','About')
@section('content')

<!-- Hero Section -->
<section class="about-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-white text-center">
                <h1 class="display-3 mb-4 font-weight-bold">About Web Hotel</h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Discover our story of luxury, comfort, and exceptional hospitality</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="section-title mb-4">Our Story</h2>
                <p class="lead mb-4">Founded in 2010, Web Hotel has been providing exceptional hospitality experiences for over a decade.</p>
                <p class="mb-4">What started as a small boutique hotel has grown into a premier destination for travelers seeking luxury, comfort, and unforgettable memories. Our commitment to excellence has earned us numerous awards and the loyalty of guests from around the world.</p>
                <p class="mb-4">We believe that every guest deserves personalized attention and a stay that exceeds expectations. From our carefully designed rooms to our world-class amenities, every aspect of Web Hotel is crafted with your comfort in mind.</p>
                <div class="d-flex">
                    <div class="mr-5">
                        <h3 class="text-primary mb-1">15K+</h3>
                        <p class="text-muted">Happy Guests</p>
                    </div>
                    <div class="mr-5">
                        <h3 class="text-primary mb-1">85+</h3>
                        <p class="text-muted">Luxury Rooms</p>
                    </div>
                    <div>
                        <h3 class="text-primary mb-1">12</h3>
                        <p class="text-muted">Awards Won</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hotel Lobby" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mission-card p-5 h-100 rounded shadow-sm">
                    <div class="mission-icon mb-4 text-center">
                        <i class="fa fa-bullseye fa-3x text-primary"></i>
                    </div>
                    <h3 class="text-center mb-4">Our Mission</h3>
                    <p class="text-center">To create unforgettable experiences by providing exceptional hospitality, luxurious accommodations, and personalized service that exceeds our guests' expectations.</p>
                    <p class="text-center mb-0">We strive to be the preferred choice for travelers seeking comfort, convenience, and memorable stays in the heart of the city.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-card p-5 h-100 rounded shadow-sm">
                    <div class="vision-icon mb-4 text-center">
                        <i class="fa fa-eye fa-3x text-secondary"></i>
                    </div>
                    <h3 class="text-center mb-4">Our Vision</h3>
                    <p class="text-center">To be recognized as the leading luxury hotel brand known for innovation, sustainability, and creating meaningful connections with our guests and community.</p>
                    <p class="text-center mb-0">We envision a future where every traveler feels at home, and every stay becomes a cherished memory.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title">Our Values</h2>
                <p class="text-muted lead">The principles that guide everything we do</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="value-card text-center p-4 h-100">
                    <div class="value-icon mb-4" style="font-size: 3.5rem; color: #3498db;">
                        <i class="fa fa-heart"></i>
                    </div>
                    <h4 class="mb-3">Exceptional Service</h4>
                    <p>We go above and beyond to ensure every guest feels valued and cared for throughout their stay.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-card text-center p-4 h-100">
                    <div class="value-icon mb-4" style="font-size: 3.5rem; color: #e74c3c;">
                        <i class="fa fa-leaf"></i>
                    </div>
                    <h4 class="mb-3">Sustainability</h4>
                    <p>We're committed to environmentally responsible practices and reducing our ecological footprint.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-card text-center p-4 h-100">
                    <div class="value-icon mb-4" style="font-size: 3.5rem; color: #f39c12;">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4 class="mb-3">Community</h4>
                    <p>We actively support and engage with our local community through various initiatives and partnerships.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title text-white">Meet Our Leadership Team</h2>
                <p class="text-light lead">The passionate individuals behind our success</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="team-card text-center p-4 h-100">
                    <div class="team-image mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle" width="150" alt="CEO">
                    </div>
                    <h4 class="mb-2">James Wilson</h4>
                    <p class="text-primary mb-3">Chief Executive Officer</p>
                    <p class="mb-3">With over 20 years in hospitality, James leads our vision for exceptional guest experiences.</p>
                    <div class="social-links">
                        <a href="#" class="text-white mr-2"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="text-white mr-2"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center p-4 h-100">
                    <div class="team-image mb-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle" width="150" alt="Manager">
                    </div>
                    <h4 class="mb-2">Sarah Martinez</h4>
                    <p class="text-primary mb-3">General Manager</p>
                    <p class="mb-3">Sarah ensures every aspect of our hotel operations meets the highest standards of excellence.</p>
                    <div class="social-links">
                        <a href="#" class="text-white mr-2"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="text-white mr-2"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center p-4 h-100">
                    <div class="team-image mb-4">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" class="rounded-circle" width="150" alt="Director">
                    </div>
                    <h4 class="mb-2">Michael Chen</h4>
                    <p class="text-primary mb-3">Director of Hospitality</p>
                    <p class="mb-3">Michael oversees our guest services team, ensuring every visitor receives personalized attention.</p>
                    <div class="social-links">
                        <a href="#" class="text-white mr-2"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="text-white mr-2"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title">Awards & Recognition</h2>
                <p class="text-muted lead">Celebrating excellence in hospitality</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="award-card text-center p-4">
                    <div class="award-icon mb-3" style="font-size: 3rem; color: #FFD700;">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <h5>Luxury Hotel Award 2024</h5>
                    <p class="text-muted small">International Hotel Awards</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="award-card text-center p-4">
                    <div class="award-icon mb-3" style="font-size: 3rem; color: #C0C0C0;">
                        <i class="fa fa-star"></i>
                    </div>
                    <h5>Excellence in Service 2023</h5>
                    <p class="text-muted small">Hospitality Excellence Forum</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="award-card text-center p-4">
                    <div class="award-icon mb-3" style="font-size: 3rem; color: #CD7F32;">
                        <i class="fa fa-shield"></i>
                    </div>
                    <h5>Green Hotel Certification</h5>
                    <p class="text-muted small">Sustainable Tourism Council</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="award-card text-center p-4">
                    <div class="award-icon mb-3" style="font-size: 3rem; color: #3498db;">
                        <i class="fa fa-users"></i>
                    </div>
                    <h5>Best Employer 2024</h5>
                    <p class="text-muted small">Hotel Industry Association</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">Experience the Web Hotel Difference</h2>
                <p class="lead mb-4">Join thousands of satisfied guests who have made Web Hotel their preferred choice for luxury accommodations.</p>
                <a href="{{ url('/') }}#booking" class="btn btn-light btn-lg px-5">
                    <i class="fa fa-calendar-check-o mr-2"></i> Book Your Stay
                </a>
            </div>
        </div>
    </div>
</section>

<style>
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
        width: 80px;
        height: 3px;
        background: linear-gradient(to right, #3498db, #e74c3c);
    }
    
    .about-hero {
        position: relative;
    }
    
    .mission-card, .vision-card {
        background: white;
        transition: transform 0.3s ease;
    }
    
    .mission-card:hover, .vision-card:hover {
        transform: translateY(-5px);
    }
    
    .value-card {
        background: white;
        border-radius: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    
    .value-icon {
        transition: transform 0.3s ease;
    }
    
    .value-card:hover .value-icon {
        transform: scale(1.2);
    }
    
    .team-card {
        background: rgba(255,255,255,0.1);
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .team-card:hover {
        background: rgba(255,255,255,0.15);
        transform: translateY(-5px);
    }
    
    .award-card {
        background: white;
        border-radius: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border: 1px solid #f0f0f0;
    }
    
    .award-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .about-image {
        transition: transform 0.3s ease;
    }
    
    .about-image:hover {
        transform: scale(1.02);
    }
    
    .btn-primary {
        background: linear-gradient(to right, #3498db, #2980b9);
        border: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background: linear-gradient(to right, #2980b9, #3498db);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .d-flex {
            flex-direction: column;
            text-align: center;
        }
        
        .d-flex > div {
            margin-bottom: 20px;
        }
    }
</style>

@endsection