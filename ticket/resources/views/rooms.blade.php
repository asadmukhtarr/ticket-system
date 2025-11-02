@extends('layouts.header')
@section('title','All Available Rooms')
@section('content')

<!-- Hero Section -->
<section class="rooms-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 50vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-white text-center">
                <h1 class="display-3 mb-4 font-weight-bold">Our Luxury Rooms</h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Discover our carefully curated selection of luxurious accommodations</p>
            </div>
        </div>
    </div>
</section>

<!-- Compact Filter Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filter-card p-4 rounded shadow-sm">
                    <form id="roomFilter" class="d-flex align-items-end flex-wrap">
                        <!-- Check-in Date -->
                        <div class="filter-group mr-3 mb-0">
                            <label class="form-label small font-weight-bold mb-1">Check-In</label>
                            <div class="input-group" style="width: 150px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-right-0"><i class="fa fa-calendar text-primary"></i></span>
                                </div>
                                <input type="date" class="form-control border-left-0" id="filterCheckIn">
                            </div>
                        </div>

                        <!-- Check-out Date -->
                        <div class="filter-group mr-3 mb-0">
                            <label class="form-label small font-weight-bold mb-1">Check-Out</label>
                            <div class="input-group" style="width: 150px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-right-0"><i class="fa fa-calendar text-primary"></i></span>
                                </div>
                                <input type="date" class="form-control border-left-0" id="filterCheckOut">
                            </div>
                        </div>

                        <!-- Guests -->
                        <div class="filter-group mr-3 mb-0">
                            <label class="form-label small font-weight-bold mb-1">Guests</label>
                            <select class="form-control" style="width: 120px;" id="filterGuests">
                                <option>1 Guest</option>
                                <option selected>2 Guests</option>
                                <option>3 Guests</option>
                                <option>4 Guests</option>
                                <option>5+ Guests</option>
                            </select>
                        </div>

                        <!-- Room Type -->
                        <div class="filter-group mr-3 mb-0">
                            <label class="form-label small font-weight-bold mb-1">Room Type</label>
                            <select class="form-control" style="width: 160px;" id="filterRoomType">
                                <option>All Rooms</option>
                                <option>Standard Room</option>
                                <option>Deluxe Room</option>
                                <option>Executive Suite</option>
                                <option>Presidential Suite</option>
                            </select>
                        </div>

                        <!-- Price Range -->
                        <div class="filter-group mr-3 mb-0">
                            <label class="form-label small font-weight-bold mb-1">Max Price</label>
                            <select class="form-control" style="width: 140px;" id="filterPrice">
                                <option>Any Price</option>
                                <option>$0 - $100</option>
                                <option>$100 - $200</option>
                                <option>$200 - $300</option>
                                <option>$300+</option>
                            </select>
                        </div>

                        <!-- Search Button -->
                        <div class="filter-group mb-0">
                            <button type="submit" class="btn btn-primary" style="height: 38px;">
                                <i class="fa fa-search mr-2"></i> Search Rooms
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Available Rooms Grid -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="section-title mb-0">Available Rooms</h2>
                    <div class="sort-options">
                        <select class="form-control" id="sortRooms" style="width: 200px;">
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="name">Room Name</option>
                            <option value="rating">Guest Rating</option>
                        </select>
                    </div>
                </div>
                <p class="text-muted mt-2">Showing 12 available rooms</p>
            </div>
        </div>

        <div class="row" id="roomsGrid">
            <!-- Room 1 -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="room-card card h-100 shadow-sm">
                    <div class="room-image position-relative">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Standard Room">
                        <div class="room-badge position-absolute">Most Popular</div>
                        <div class="room-actions position-absolute">
                            <button class="btn btn-light btn-sm rounded-circle mr-2">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button class="btn btn-light btn-sm rounded-circle">
                                <i class="fa fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h4 class="card-title mb-0">Standard Room</h4>
                            <div class="room-rating text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <small class="text-muted ml-1">(128)</small>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-3">Comfortable and affordable accommodation with all essential amenities.</p>
                        
                        <div class="room-features mb-3">
                            <div class="feature-item d-flex align-items-center mb-2">
                                <i class="fa fa-user text-primary mr-2"></i>
                                <small>2 Guests</small>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-2">
                                <i class="fa fa-bed text-primary mr-2"></i>
                                <small>1 Queen Bed</small>
                            </div>
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-arrows text-primary mr-2"></i>
                                <small>320 sq ft</small>
                            </div>
                        </div>
                        
                        <div class="room-amenities mb-3">
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-wifi mr-1"></i>WiFi</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-tv mr-1"></i>TV</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-snowflake-o mr-1"></i>AC</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-coffee mr-1"></i>Coffee</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="room-price">
                                <span class="h4 text-primary mb-0">$99</span>
                                <small class="text-muted">/night</small>
                                <div class="text-success small font-weight-bold">15% OFF</div>
                            </div>
                            <button class="btn btn-primary">
                                <i class="fa fa-calendar mr-2"></i> Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 2 -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="room-card card h-100 shadow-sm">
                    <div class="room-image position-relative">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Deluxe Room">
                        <div class="room-badge position-absolute bg-success">Best Value</div>
                        <div class="room-actions position-absolute">
                            <button class="btn btn-light btn-sm rounded-circle mr-2">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button class="btn btn-light btn-sm rounded-circle">
                                <i class="fa fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h4 class="card-title mb-0">Deluxe Room</h4>
                            <div class="room-rating text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <small class="text-muted ml-1">(95)</small>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-3">Spacious room with premium amenities and beautiful city views.</p>
                        
                        <div class="room-features mb-3">
                            <div class="feature-item d-flex align-items-center mb-2">
                                <i class="fa fa-user text-primary mr-2"></i>
                                <small>3 Guests</small>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-2">
                                <i class="fa fa-bed text-primary mr-2"></i>
                                <small>1 King Bed</small>
                            </div>
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-arrows text-primary mr-2"></i>
                                <small>450 sq ft</small>
                            </div>
                        </div>
                        
                        <div class="room-amenities mb-3">
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-wifi mr-1"></i>WiFi</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-tv mr-1"></i>Smart TV</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-snowflake-o mr-1"></i>AC</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-bath mr-1"></i>Jacuzzi</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="room-price">
                                <span class="h4 text-primary mb-0">$149</span>
                                <small class="text-muted">/night</small>
                                <div class="text-success small font-weight-bold">Free Breakfast</div>
                            </div>
                            <button class="btn btn-primary">
                                <i class="fa fa-calendar mr-2"></i> Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 3 -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="room-card card h-100 shadow-sm">
                    <div class="room-image position-relative">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Executive Suite">
                        <div class="room-badge position-absolute bg-warning">Luxury</div>
                        <div class="room-actions position-absolute">
                            <button class="btn btn-light btn-sm rounded-circle mr-2">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button class="btn btn-light btn-sm rounded-circle">
                                <i class="fa fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h4 class="card-title mb-0">Executive Suite</h4>
                            <div class="room-rating text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <small class="text-muted ml-1">(67)</small>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-3">Luxurious suite with separate living area and premium services.</p>
                        
                        <div class="room-features mb-3">
                            <div class="feature-item d-flex align-items-center mb-2">
                                <i class="fa fa-user text-primary mr-2"></i>
                                <small>4 Guests</small>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-2">
                                <i class="fa fa-bed text-primary mr-2"></i>
                                <small>2 King Beds</small>
                            </div>
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-arrows text-primary mr-2"></i>
                                <small>750 sq ft</small>
                            </div>
                        </div>
                        
                        <div class="room-amenities mb-3">
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-wifi mr-1"></i>WiFi</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-tv mr-1"></i>Smart TV</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-snowflake-o mr-1"></i>AC</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-bath mr-1"></i>Jacuzzi</span>
                            <span class="badge badge-light mr-1 mb-1"><i class="fa fa-glass mr-1"></i>Mini Bar</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="room-price">
                                <span class="h4 text-primary mb-0">$249</span>
                                <small class="text-muted">/night</small>
                                <div class="text-success small font-weight-bold">Suite Upgrade</div>
                            </div>
                            <button class="btn btn-primary">
                                <i class="fa fa-calendar mr-2"></i> Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-12">
                <nav aria-label="Room pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
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
    
    .rooms-hero {
        position: relative;
    }
    
    .filter-card {
        background: white;
        margin-top: -50px;
        position: relative;
        z-index: 10;
    }
    
    .filter-group {
        display: flex;
        flex-direction: column;
    }
    
    .form-label {
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 5px;
        color: #333;
    }
    
    .room-card {
        border: none;
        border-radius: 15px;
        transition: all 0.3s ease;
        overflow: hidden;
    }
    
    .room-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .room-image {
        overflow: hidden;
    }
    
    .room-image img {
        transition: transform 0.3s ease;
        height: 250px;
        object-fit: cover;
    }
    
    .room-card:hover .room-image img {
        transform: scale(1.05);
    }
    
    .room-badge {
        top: 15px;
        left: 15px;
        background: #e74c3c;
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .room-actions {
        top: 15px;
        right: 15px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .room-card:hover .room-actions {
        opacity: 1;
    }
    
    .room-features {
        border-top: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0;
        padding: 15px 0;
    }
    
    .feature-item {
        font-size: 0.9rem;
    }
    
    .room-amenities {
        min-height: 40px;
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
        font-size: 0.9rem;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    
    /* Responsive adjustments for filters */
    @media (max-width: 1200px) {
        .filter-group {
            margin-bottom: 15px !important;
        }
        
        #roomFilter {
            justify-content: space-between;
        }
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .filter-card {
            margin-top: -30px;
            padding: 20px !important;
        }
        
        #roomFilter {
            flex-direction: column;
            align-items: stretch;
        }
        
        .filter-group {
            margin-right: 0 !important;
            margin-bottom: 15px !important;
        }
        
        .filter-group .form-control,
        .filter-group .input-group {
            width: 100% !important;
        }
        
        .d-flex.justify-content-between {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .sort-options {
            margin-top: 15px;
            width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Room filtering functionality
        const roomFilter = document.getElementById('roomFilter');
        const sortRooms = document.getElementById('sortRooms');
        
        roomFilter.addEventListener('submit', function(e) {
            e.preventDefault();
            filterRooms();
        });
        
        sortRooms.addEventListener('change', function() {
            sortRoomCards();
        });
        
        function filterRooms() {
            console.log('Filtering rooms...');
        }
        
        function sortRoomCards() {
            console.log('Sorting rooms...');
        }
        
        // Add to wishlist functionality
        const wishlistButtons = document.querySelectorAll('.room-actions .btn:first-child');
        wishlistButtons.forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('fa-heart-o')) {
                    icon.classList.remove('fa-heart-o');
                    icon.classList.add('fa-heart', 'text-danger');
                } else {
                    icon.classList.remove('fa-heart', 'text-danger');
                    icon.classList.add('fa-heart-o');
                }
            });
        });
    });
</script>

@endsection