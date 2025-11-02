@extends('layouts.header')
@section('title','Checkout')
@section('content')

<!-- Hero Section -->
<section class="checkout-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 40vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-white text-center">
                <h1 class="display-3 mb-4 font-weight-bold">Complete Your Booking</h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Finalize your reservation and get ready for an amazing stay</p>
            </div>
        </div>
    </div>
</section>

<!-- Checkout Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Booking Summary -->
            <div class="col-lg-4 mb-5">
                <div class="booking-summary card shadow-lg border-0 sticky-top" style="top: 100px;">
                    <div class="card-header bg-primary text-white py-4">
                        <h4 class="mb-0 text-center"><i class="fa fa-shopping-cart mr-2"></i>Booking Summary</h4>
                    </div>
                    <div class="card-body p-4">
                        <!-- Room Details -->
                        <div class="room-summary mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                     alt="Executive Suite" class="rounded mr-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-1">Executive Suite</h6>
                                    <small class="text-muted">2 King Beds • 4 Guests</small>
                                    <div class="text-warning small">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stay Details -->
                        <div class="stay-details mb-4">
                            <h6 class="font-weight-bold mb-3">Stay Details</h6>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Check-in</span>
                                <span class="font-weight-bold">Nov 15, 2024</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Check-out</span>
                                <span class="font-weight-bold">Nov 17, 2024</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>2 nights</span>
                                <span class="font-weight-bold">2 Guests</span>
                            </div>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="price-breakdown">
                            <h6 class="font-weight-bold mb-3">Price Details</h6>
                            <div class="d-flex justify-content-between mb-2">
                                <span>$249 x 2 nights</span>
                                <span>$498.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Service fee</span>
                                <span>$25.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Taxes & charges</span>
                                <span>$37.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2 text-success">
                                <span>Promo discount</span>
                                <span>-$50.00</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between font-weight-bold">
                                <span>Total Amount</span>
                                <span class="h5 text-primary">$510.00</span>
                            </div>
                        </div>

                        <!-- Special Offers -->
                        <div class="special-offers mt-4 p-3 bg-light rounded">
                            <h6 class="font-weight-bold mb-2"><i class="fa fa-gift text-warning mr-2"></i>Special Offers</h6>
                            <ul class="list-unstyled small mb-0">
                                <li class="mb-1">✓ Free breakfast included</li>
                                <li class="mb-1">✓ Late checkout until 2 PM</li>
                                <li>✓ Welcome drink on arrival</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkout Form -->
            <div class="col-lg-8">
                <div class="checkout-form">
                    <!-- Progress Steps -->
                    <div class="progress-steps mb-5">
                        <div class="d-flex justify-content-between position-relative">
                            <div class="step completed text-center">
                                <div class="step-icon bg-primary text-white rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fa fa-user"></i>
                                </div>
                                <span class="small font-weight-bold">Guest Info</span>
                            </div>
                            <div class="step completed text-center">
                                <div class="step-icon bg-primary text-white rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <span class="small font-weight-bold">Payment</span>
                            </div>
                            <div class="step active text-center">
                                <div class="step-icon bg-light text-muted rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="small font-weight-bold">Confirmation</span>
                            </div>
                            <div class="progress-bar position-absolute" style="top: 25px; height: 3px; background: #e9ecef; width: 100%; z-index: -1;">
                                <div class="progress-bar bg-primary" style="width: 66%; height: 100%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Guest Information -->
                    <div class="form-section mb-5">
                        <h3 class="mb-4">Guest Information</h3>
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label font-weight-bold">First Name *</label>
                                        <input type="text" class="form-control" value="John" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label font-weight-bold">Last Name *</label>
                                        <input type="text" class="form-control" value="Doe" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label font-weight-bold">Email Address *</label>
                                        <input type="email" class="form-control" value="john.doe@example.com" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label font-weight-bold">Phone Number *</label>
                                        <input type="tel" class="form-control" value="+1 (555) 123-4567" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label font-weight-bold">Special Requests</label>
                                    <textarea class="form-control" rows="3" placeholder="Any special requests or requirements..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Information -->
                    <div class="form-section mb-5">
                        <h3 class="mb-4">Payment Method</h3>
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <!-- Payment Method Selection -->
                                <div class="payment-methods mb-4">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" checked>
                                        <label class="form-check-label font-weight-bold" for="creditCard">
                                            <i class="fa fa-credit-card mr-2"></i>Credit/Debit Card
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="paypal">
                                        <label class="form-check-label font-weight-bold" for="paypal">
                                            <i class="fa fa-paypal mr-2"></i>PayPal
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="applePay">
                                        <label class="form-check-label font-weight-bold" for="applePay">
                                            <i class="fa fa-apple mr-2"></i>Apple Pay
                                        </label>
                                    </div>
                                </div>

                                <!-- Credit Card Form -->
                                <div class="credit-card-form">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label font-weight-bold">Card Number *</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="1234 5678 9012 3456" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-white">
                                                        <i class="fa fa-cc-visa text-primary mr-1"></i>
                                                        <i class="fa fa-cc-mastercard text-warning mr-1"></i>
                                                        <i class="fa fa-cc-amex text-info"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label font-weight-bold">Expiry Date *</label>
                                            <input type="text" class="form-control" placeholder="MM/YY" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label font-weight-bold">CVV *</label>
                                            <input type="text" class="form-control" placeholder="123" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label font-weight-bold">Cardholder Name *</label>
                                            <input type="text" class="form-control" placeholder="John Doe" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Billing Address -->
                                <div class="billing-address mt-4">
                                    <h6 class="font-weight-bold mb-3">Billing Address</h6>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="sameAsGuest" checked>
                                        <label class="form-check-label" for="sameAsGuest">
                                            Same as guest information
                                        </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label font-weight-bold">Address *</label>
                                            <input type="text" class="form-control" placeholder="123 Main Street" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label font-weight-bold">City *</label>
                                            <input type="text" class="form-control" placeholder="New York" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label font-weight-bold">ZIP Code *</label>
                                            <input type="text" class="form-control" placeholder="10001" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label font-weight-bold">Country *</label>
                                            <select class="form-control" required>
                                                <option value="">Select Country</option>
                                                <option value="US" selected>United States</option>
                                                <option value="CA">Canada</option>
                                                <option value="UK">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="form-section mb-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and 
                                        <a href="#" class="text-primary">Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" checked>
                                    <label class="form-check-label" for="newsletter">
                                        Send me special offers and promotions
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <a href="{{ url('/rooms/executive-suite') }}" class="btn btn-outline-primary btn-lg btn-block">
                                    <i class="fa fa-arrow-left mr-2"></i> Back to Room
                                </a>
                            </div>
                            <div class="col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-lock mr-2"></i> Complete Booking
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Security Badges -->
                    <div class="security-badges text-center mt-4">
                        <p class="text-muted small mb-3">Your payment is secure and encrypted</p>
                        <div class="d-flex justify-content-center">
                            <div class="mx-3">
                                <i class="fa fa-lock fa-2x text-success mb-2"></i>
                                <div class="small">SSL Secure</div>
                            </div>
                            <div class="mx-3">
                                <i class="fa fa-shield fa-2x text-success mb-2"></i>
                                <div class="small">PCI Compliant</div>
                            </div>
                            <div class="mx-3">
                                <i class="fa fa-credit-card fa-2x text-success mb-2"></i>
                                <div class="small">256-bit Encryption</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .checkout-hero {
        position: relative;
    }
    
    .booking-summary {
        border-radius: 15px;
        overflow: hidden;
    }
    
    .sticky-top {
        position: sticky;
        z-index: 100;
    }
    
    .progress-steps .step {
        flex: 1;
        position: relative;
        z-index: 2;
    }
    
    .step-icon {
        transition: all 0.3s ease;
    }
    
    .step.completed .step-icon {
        background: #28a745 !important;
    }
    
    .step.active .step-icon {
        background: #007bff !important;
        transform: scale(1.1);
    }
    
    .form-section {
        border-radius: 10px;
    }
    
    .card {
        border-radius: 15px;
    }
    
    .form-label {
        font-weight: 600;
        margin-bottom: 8px;
        color: #333;
    }
    
    .form-control {
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        padding: 12px 15px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    
    .btn-primary {
        background: linear-gradient(to right, #3498db, #2980b9);
        border: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        padding: 15px 30px;
    }
    
    .btn-primary:hover {
        background: linear-gradient(to right, #2980b9, #3498db);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    .btn-outline-primary {
        border-radius: 50px;
        font-weight: 600;
        padding: 15px 30px;
    }
    
    .special-offers {
        border-left: 4px solid #ffc107;
    }
    
    .payment-methods .form-check-label {
        display: flex;
        align-items: center;
        padding: 10px;
        border: 2px solid #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .payment-methods .form-check-input:checked + .form-check-label {
        border-color: #3498db;
        background-color: #f8f9fa;
    }
    
    .security-badges .d-flex > div {
        transition: transform 0.3s ease;
    }
    
    .security-badges .d-flex > div:hover {
        transform: translateY(-5px);
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .booking-summary {
            position: relative !important;
            top: 0 !important;
            margin-bottom: 2rem;
        }
        
        .progress-steps .d-flex {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .progress-bar {
            display: none;
        }
        
        .step {
            margin-bottom: 1rem;
            text-align: left !important;
            flex-direction: row !important;
            display: flex;
            align-items: center;
        }
        
        .step-icon {
            margin-right: 15px !important;
            margin-bottom: 0 !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Payment method selection
        const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
        const creditCardForm = document.querySelector('.credit-card-form');
        
        paymentMethods.forEach(method => {
            method.addEventListener('change', function() {
                if (this.id === 'creditCard') {
                    creditCardForm.style.display = 'block';
                } else {
                    creditCardForm.style.display = 'none';
                }
            });
        });
        
        // Billing address toggle
        const sameAsGuest = document.getElementById('sameAsGuest');
        const billingAddress = document.querySelector('.billing-address .row');
        
        sameAsGuest.addEventListener('change', function() {
            if (this.checked) {
                billingAddress.style.display = 'none';
            } else {
                billingAddress.style.display = 'block';
            }
        });
        
        // Form validation
        const checkoutForm = document.querySelector('.checkout-form');
        const completeBookingBtn = document.querySelector('button[type="submit"]');
        
        completeBookingBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Basic validation
            const termsChecked = document.getElementById('terms').checked;
            if (!termsChecked) {
                alert('Please agree to the Terms and Conditions.');
                return;
            }
            
            // In a real application, you would process the payment here
            // For demonstration, show success message
            alert('Booking confirmed! Thank you for your reservation.');
            window.location.href = "{{ url('/booking-confirmation') }}";
        });
        
        // Credit card number formatting
        const cardNumberInput = document.querySelector('input[placeholder="1234 5678 9012 3456"]');
        cardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
            let matches = value.match(/\d{4,16}/g);
            let match = matches && matches[0] || '';
            let parts = [];
            
            for (let i = 0, len = match.length; i < len; i += 4) {
                parts.push(match.substring(i, i + 4));
            }
            
            if (parts.length) {
                e.target.value = parts.join(' ');
            } else {
                e.target.value = value;
            }
        });
    });
</script>

@endsection