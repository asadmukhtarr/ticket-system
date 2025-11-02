@extends('layouts.header')
@section('title','Room Profile')
@section('content')

<!-- Hero Section -->
<section class="room-profile-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-white">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ url('/rooms') }}" class="text-white">Rooms</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Executive Suite</li>
                    </ol>
                </nav>
                <h1 class="display-3 mb-3 font-weight-bold">Executive Suite</h1>
                <div class="d-flex align-items-center mb-4">
                    <div class="room-rating text-warning mr-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <small class="text-white ml-2">(67 reviews)</small>
                    </div>
                    <span class="badge badge-success badge-lg">BESTSELLER</span>
                </div>
                <p class="lead mb-4" style="font-size: 1.3rem;">Luxurious suite with separate living area, premium amenities, and breathtaking city views</p>
            </div>
        </div>
    </div>
</section>

<!-- Room Gallery & Details -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Room Gallery -->
            <div class="col-lg-8 mb-5">
                <div class="room-gallery mb-4">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="main-image rounded overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                     alt="Executive Suite" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="gallery-thumb rounded overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1586105251261-72a756497a11?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                     alt="Room View 1" class="img-fluid w-100" style="height: 100px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="gallery-thumb rounded overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                     alt="Room View 2" class="img-fluid w-100" style="height: 100px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="gallery-thumb rounded overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                     alt="Room View 3" class="img-fluid w-100" style="height: 100px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="gallery-thumb rounded overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                     alt="Room View 4" class="img-fluid w-100" style="height: 100px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room Details -->
                <div class="room-details">
                    <h3 class="mb-4">Room Details</h3>
                    <p class="text-muted mb-4">Our Executive Suite offers the ultimate in luxury and comfort. Featuring a separate living area, premium king-sized bed, and stunning city views, this suite is perfect for both business and leisure travelers seeking an exceptional experience.</p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5 class="mb-3">Room Features</h5>
                            <div class="feature-list">
                                <div class="feature-item d-flex align-items-center mb-2">
                                    <i class="fa fa-arrows text-primary mr-3 fa-lg"></i>
                                    <span>750 sq ft of luxury space</span>
                                </div>
                                <div class="feature-item d-flex align-items-center mb-2">
                                    <i class="fa fa-bed text-primary mr-3 fa-lg"></i>
                                    <span>2 King Size Beds</span>
                                </div>
                                <div class="feature-item d-flex align-items-center mb-2">
                                    <i class="fa fa-user text-primary mr-3 fa-lg"></i>
                                    <span>Sleeps up to 4 guests</span>
                                </div>
                                <div class="feature-item d-flex align-items-center mb-2">
                                    <i class="fa fa-tv text-primary mr-3 fa-lg"></i>
                                    <span>65" Smart TV with streaming</span>
                                </div>
                                <div class="feature-item d-flex align-items-center">
                                    <i class="fa fa-snowflake-o text-primary mr-3 fa-lg"></i>
                                    <span>Individual climate control</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-3">Bathroom Amenities</h5>
                            <div class="feature-list">
                                <div class="feature-item d-flex align-items-center mb-2">
                                    <i class="fa fa-bath text-primary mr-3 fa-lg"></i>
                                    <span>Jacuzzi bathtub</span>
                                </div>
                                <div class="feature-item d-flex align-items-center mb-2">
                                    <i class="fa fa-shower text-primary mr-3 fa-lg"></i>
                                    <span>Rain shower</span>
                                </div>
                                <div class="feature-item d-flex align-items-center mb-2">
                                    <i class="fa fa-snowflake-o text-primary mr-3 fa-lg"></i>
                                    <span>Heated floors</span>
                                </div>
                                <div class="feature-item d-flex align-items-center">
                                    <i class="fa fa-gift text-primary mr-3 fa-lg"></i>
                                    <span>Premium toiletries</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Amenities Grid -->
                    <div class="amenities-grid mb-5">
                        <h5 class="mb-4">All Amenities</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="amenity-item d-flex align-items-center">
                                    <i class="fa fa-wifi text-primary mr-3"></i>
                                    <span>High-speed WiFi</span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="amenity-item d-flex align-items-center">
                                    <i class="fa fa-coffee text-primary mr-3"></i>
                                    <span>Nespresso coffee machine</span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="amenity-item d-flex align-items-center">
                                    <i class="fa fa-glass text-primary mr-3"></i>
                                    <span>Mini bar</span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="amenity-item d-flex align-items-center">
                                    <i class="fa fa-lock text-primary mr-3"></i>
                                    <span>Electronic safe</span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="amenity-item d-flex align-items-center">
                                    <i class="fa fa-umbrella text-primary mr-3"></i>
                                    <span>Bathrobes & slippers</span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="amenity-item d-flex align-items-center">
                                    <i class="fa fa-bell text-primary mr-3"></i>
                                    <span>24/7 Room service</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Section -->
                    <div class="reviews-section">
                        <h3 class="mb-4">Guest Reviews</h3>
                        <div class="review-card mb-4 p-4 rounded shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h6 class="mb-1">Sarah Johnson</h6>
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <small class="text-muted">2 weeks ago</small>
                            </div>
                            <p class="mb-0">"Absolutely stunning suite! The city view was breathtaking and the jacuzzi was the perfect way to relax after a long day of meetings. Will definitely stay here again!"</p>
                        </div>
                        <div class="review-card p-4 rounded shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h6 class="mb-1">Michael Chen</h6>
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <small class="text-muted">1 month ago</small>
                            </div>
                            <p class="mb-0">"Perfect for our anniversary getaway. The suite was spacious, clean, and the attention to detail was impressive. The complimentary champagne was a nice touch!"</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div class="col-lg-4">
                <div class="booking-sidebar card shadow-lg border-0 sticky-top" style="top: 100px;">
                    <div class="card-body p-4">
                        <div class="price-section text-center mb-4">
                            <div class="d-flex align-items-baseline justify-content-center mb-2">
                                <span class="h2 text-primary font-weight-bold">$249</span>
                                <span class="text-muted ml-2">/ night</span>
                            </div>
                            <div class="text-success font-weight-bold mb-3">
                                <i class="fa fa-tag mr-2"></i>Free Suite Upgrade Available
                            </div>
                        </div>

                        <form class="booking-form">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Check-In Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white"><i class="fa fa-calendar text-primary"></i></span>
                                    </div>
                                    <input type="date" class="form-control" value="{{ date('Y-m-d') }}">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Check-Out Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white"><i class="fa fa-calendar text-primary"></i></span>
                                    </div>
                                    <input type="date" class="form-control" value="{{ date('Y-m-d', strtotime('+2 days')) }}">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Guests</label>
                                <select class="form-control">
                                    <option>1 Guest</option>
                                    <option selected>2 Guests</option>
                                    <option>3 Guests</option>
                                    <option>4 Guests</option>
                                </select>
                            </div>

                            <div class="price-breakdown mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>$249 x 2 nights</span>
                                    <span>$498</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Service fee</span>
                                    <span>$25</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Taxes</span>
                                    <span>$37</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between font-weight-bold">
                                    <span>Total</span>
                                    <span class="h5 text-primary">$560</span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block py-3">
                                <i class="fa fa-credit-card mr-2"></i> Book Now
                            </button>

                            <div class="text-center mt-3">
                                <small class="text-muted">No credit card required to reserve</small>
                            </div>
                        </form>

                        <div class="mt-4">
                            <div class="security-features text-center">
                                <div class="d-flex justify-content-around">
                                    <div class="text-center">
                                        <i class="fa fa-shield fa-2x text-success mb-2"></i>
                                        <div class="small">Secure Payment</div>
                                    </div>
                                    <div class="text-center">
                                        <i class="fa fa-clock-o fa-2x text-success mb-2"></i>
                                        <div class="small">Instant Confirmation</div>
                                    </div>
                                    <div class="text-center">
                                        <i class="fa fa-phone fa-2x text-success mb-2"></i>
                                        <div class="small">24/7 Support</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Similar Rooms Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="section-title">You Might Also Like</h3>
                <p class="text-muted">Explore other luxurious accommodations</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card room-card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Deluxe Room">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text text-muted">Spacious room with premium amenities</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 text-primary mb-0">$149</span>
                            <a href="#" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card room-card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Standard Room">
                    <div class="card-body">
                        <h5 class="card-title">Standard Room</h5>
                        <p class="card-text text-muted">Comfortable and affordable accommodation</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 text-primary mb-0">$99</span>
                            <a href="#" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card room-card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Presidential Suite">
                    <div class="card-body">
                        <h5 class="card-title">Presidential Suite</h5>
                        <p class="card-text text-muted">Ultimate luxury with panoramic views</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 text-primary mb-0">$499</span>
                            <a href="#" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
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
        left: 0;
        width: 80px;
        height: 3px;
        background: linear-gradient(to right, #3498db, #e74c3c);
    }
    
    .room-profile-hero {
        position: relative;
    }
    
    .breadcrumb {
        background: transparent !important;
    }
    
    .breadcrumb-item a {
        text-decoration: none;
    }
    
    .badge-lg {
        padding: 8px 12px;
        font-size: 0.8rem;
    }
    
    .gallery-thumb {
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    
    .gallery-thumb:hover {
        border-color: #3498db;
        transform: scale(1.05);
    }
    
    .feature-list .feature-item {
        padding: 8px 0;
    }
    
    .amenity-item {
        padding: 5px 0;
    }
    
    .review-card {
        background: white;
        border-left: 4px solid #3498db;
    }
    
    .booking-sidebar {
        border-radius: 15px;
    }
    
    .price-breakdown {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }
    
    .room-card {
        border: none;
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .room-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
    
    .form-control {
        border-radius: 8px;
        border: 1px solid #e0e0e0;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    
    .sticky-top {
        position: sticky;
        z-index: 100;
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .booking-sidebar {
            position: relative !important;
            top: 0 !important;
            margin-top: 2rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gallery thumbnail click functionality
        const thumbnails = document.querySelectorAll('.gallery-thumb img');
        const mainImage = document.querySelector('.main-image img');
        
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function() {
                mainImage.src = this.src;
            });
        });
        
        // Booking form date validation
        const checkInInput = document.querySelector('input[type="date"]');
        const checkOutInput = document.querySelectorAll('input[type="date"]')[1];
        
        // Set minimum dates to today
        const today = new Date().toISOString().split('T')[0];
        checkInInput.min = today;
        checkOutInput.min = today;
        
        // Update checkout min date when checkin changes
        checkInInput.addEventListener('change', function() {
            checkOutInput.min = this.value;
        });
    });
</script>

@endsection