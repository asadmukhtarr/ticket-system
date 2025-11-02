@extends('layouts.header')
@section('title','Home')
@section('content')

<!-- Hero Section with Full-Width Background -->
<section class="hero-section" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 100vh; display: flex; align-items: center; position: relative; width: 100%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto text-white text-center">
                    <h1 class="display-3 mb-4 font-weight-bold">Welcome to Web Hotel</h1>
                    <p class="lead mb-5" style="font-size: 1.5rem;">Experience luxury and comfort in the heart of the city</p>
                    <a href="#booking" class="btn btn-primary btn-lg px-5 py-3" style="font-size: 1.2rem; border-radius: 50px;">
                        <i class="fa fa-calendar-check-o mr-2"></i> Book Now
                    </a>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <a href="#features" class="text-white">
            <i class="fa fa-chevron-down fa-2x"></i>
        </a>
    </div>
</section>

<!-- Full-Width Features Section -->
<section id="features" class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container-fluid px-5">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title display-4">Why Choose Our Hotel?</h2>
                <p class="text-muted lead">We offer the best services to make your stay memorable</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-4" style="font-size: 4rem; color: #3498db;">
                        <i class="fa fa-wifi"></i>
                    </div>
                    <h4 class="mb-3">Free Wi-Fi</h4>
                    <p>Stay connected with high-speed internet access throughout the hotel.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-4" style="font-size: 4rem; color: #e74c3c;">
                        <i class="fa fa-coffee"></i>
                    </div>
                    <h4 class="mb-3">Breakfast Included</h4>
                    <p>Start your day with our delicious complimentary breakfast buffet.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-4" style="font-size: 4rem; color: #f39c12;">
                        <i class="fa fa-car"></i>
                    </div>
                    <h4 class="mb-3">Free Parking</h4>
                    <p>Convenient and secure parking available for all our guests.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-4" style="font-size: 4rem; color: #9b59b6;">
                        <i class="fa fa-tint"></i>
                    </div>
                    <h4 class="mb-3">Swimming Pool</h4>
                    <p>Relax and unwind in our temperature-controlled swimming pool.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full-Width Room Showcase -->
<section class="py-5 bg-dark text-white">
    <div class="container-fluid px-0">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title display-4">Luxurious Accommodations</h2>
                <p class="text-light lead">Experience comfort in our beautifully designed rooms</p>
            </div>
        </div>
        
        <!-- Room 1 - Full Width -->
        <div class="room-showcase">
            <div class="row no-gutters align-items-center">
                <div class="col-md-6">
                    <div class="room-image" style="background: url('https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80') center/cover no-repeat; height: 500px;"></div>
                </div>
                <div class="col-md-6">
                    <div class="room-content p-5">
                        <h3 class="mb-3">Standard Room</h3>
                        <p class="mb-4">Comfortable and affordable accommodation with all essential amenities. Perfect for business travelers and couples.</p>
                        <div class="room-features mb-4">
                            <span class="badge badge-light mr-2 p-2"><i class="fa fa-user mr-1"></i> 2 Guests</span>
                            <span class="badge badge-light mr-2 p-2"><i class="fa fa-bed mr-1"></i> 1 Queen Bed</span>
                            <span class="badge badge-light mr-2 p-2"><i class="fa fa-wifi mr-1"></i> Free Wi-Fi</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h3 text-primary mb-0">$99<span class="h6">/night</span></span>
                            <a href="#" class="btn btn-outline-light btn-lg">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Room 2 - Full Width (Reversed) -->
        <div class="room-showcase">
            <div class="row no-gutters align-items-center flex-md-row-reverse">
                <div class="col-md-6">
                    <div class="room-image" style="background: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80') center/cover no-repeat; height: 500px;"></div>
                </div>
                <div class="col-md-6">
                    <div class="room-content p-5">
                        <h3 class="mb-3">Deluxe Room</h3>
                        <p class="mb-4">Spacious room with premium amenities and beautiful city views. Ideal for families and extended stays.</p>
                        <div class="room-features mb-4">
                            <span class="badge badge-light mr-2 p-2"><i class="fa fa-user mr-1"></i> 3 Guests</span>
                            <span class="badge badge-light mr-2 p-2"><i class="fa fa-bed mr-1"></i> 1 King Bed</span>
                            <span class="badge badge-light mr-2 p-2"><i class="fa fa-tv mr-1"></i> Smart TV</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h3 text-primary mb-0">$149<span class="h6">/night</span></span>
                            <a href="#" class="btn btn-outline-light btn-lg">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Booking Form Section -->
<section id="booking" class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="booking-card shadow-lg rounded">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <div class="booking-form p-5 h-100">
                                <h2 class="text-white mb-4">Book Your Stay</h2>
                                <form class="text-white">
                                    <div class="form-group mb-4">
                                        <label for="checkIn" class="font-weight-bold">Check-In Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-light"><i class="fa fa-calendar text-primary"></i></span>
                                            </div>
                                            <input type="date" class="form-control" id="checkIn" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="checkOut" class="font-weight-bold">Check-Out Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-light"><i class="fa fa-calendar text-primary"></i></span>
                                            </div>
                                            <input type="date" class="form-control" id="checkOut" required>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="adults" class="font-weight-bold">Adults</label>
                                            <select class="form-control" id="adults">
                                                <option>1</option>
                                                <option selected>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="children" class="font-weight-bold">Children</label>
                                            <select class="form-control" id="children">
                                                <option selected>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="roomType" class="font-weight-bold">Room Type</label>
                                        <select class="form-control" id="roomType">
                                            <option>Standard Room</option>
                                            <option>Deluxe Room</option>
                                            <option>Executive Suite</option>
                                            <option>Presidential Suite</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-light btn-block btn-lg py-3 mt-3">
                                        <i class="fa fa-search mr-2"></i> Check Availability
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="booking-promo h-100" style="background: url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80') center/cover no-repeat; min-height: 500px; position: relative;">
                                <div class="promo-content p-5 text-white" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7);">
                                    <h3 class="mb-3">Special Offer</h3>
                                    <p class="mb-3">Book 3 nights or more and get 15% discount plus complimentary breakfast!</p>
                                    <div class="d-flex align-items-center">
                                        <span class="h4 mb-0 mr-3 text-warning">Limited Time Only</span>
                                        <span class="badge badge-danger p-2">15% OFF</span>
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

<!-- Full-Width Testimonials -->
<section class="py-5 bg-light">
    <div class="container-fluid px-5">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title display-4">Guest Experiences</h2>
                <p class="text-muted lead">Don't just take our word for it</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 h-100 text-center">
                    <div class="testimonial-image mb-4">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle" width="100" alt="Guest">
                    </div>
                    <div class="text-warning mb-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="mb-4">"The service was exceptional and the room was spotless. Will definitely be staying here again on my next business trip."</p>
                    <h5 class="mb-1">Sarah Johnson</h5>
                    <small class="text-muted">Business Traveler</small>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 h-100 text-center">
                    <div class="testimonial-image mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle" width="100" alt="Guest">
                    </div>
                    <div class="text-warning mb-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="mb-4">"Perfect location, friendly staff, and the breakfast buffet was amazing. Our family had a wonderful vacation here."</p>
                    <h5 class="mb-1">Michael Brown</h5>
                    <small class="text-muted">Family Vacation</small>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 h-100 text-center">
                    <div class="testimonial-image mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle" width="100" alt="Guest">
                    </div>
                    <div class="text-warning mb-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="mb-4">"The executive suite was spacious and luxurious. The view from our room was breathtaking. Highly recommended!"</p>
                    <h5 class="mb-1">Jennifer Lee</h5>
                    <small class="text-muted">Honeymoon</small>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection