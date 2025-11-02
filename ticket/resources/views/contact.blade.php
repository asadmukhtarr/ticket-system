@extends('layouts.header')
@section('title','Contact')
@section('content')

<!-- Hero Section -->
<section class="contact-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 50vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-white text-center">
                <h1 class="display-3 mb-4 font-weight-bold">Contact Us</h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Get in touch with our friendly team - we're here to help</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information & Form -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="section-title mb-4">Get In Touch</h2>
                <p class="mb-5">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                
                <div class="contact-info mb-5">
                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon mr-4">
                            <i class="fa fa-map-marker fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5>Our Location</h5>
                            <p class="text-muted mb-0">123 Luxury Street<br>City Center, 10001</p>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon mr-4">
                            <i class="fa fa-phone fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5>Phone Number</h5>
                            <p class="text-muted mb-0">+1 (555) 123-4567<br>+1 (555) 765-4321</p>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon mr-4">
                            <i class="fa fa-envelope fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5>Email Address</h5>
                            <p class="text-muted mb-0">info@webhotel.com<br>reservations@webhotel.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex">
                        <div class="contact-icon mr-4">
                            <i class="fa fa-clock-o fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5>Opening Hours</h5>
                            <p class="text-muted mb-0">24/7 Reception<br>Restaurant: 6AM - 11PM</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links">
                    <h5 class="mb-3">Follow Us</h5>
                    <a href="#" class="social-link mr-3">
                        <i class="fa fa-facebook fa-2x text-primary"></i>
                    </a>
                    <a href="#" class="social-link mr-3">
                        <i class="fa fa-twitter fa-2x text-info"></i>
                    </a>
                    <a href="#" class="social-link mr-3">
                        <i class="fa fa-instagram fa-2x text-danger"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fa fa-linkedin fa-2x text-primary"></i>
                    </a>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form-card shadow-lg rounded p-5">
                    <h3 class="mb-4">Send us a Message</h3>
                    <form id="contactForm">
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="subject" class="form-label">Subject *</label>
                            <select class="form-control" id="subject" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="reservation">Reservation Question</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                                <option value="event">Event Planning</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="6" placeholder="Tell us how we can help you..." required></textarea>
                        </div>
                        
                        <div class="form-group form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="newsletter">
                            <label class="form-check-label" for="newsletter">Subscribe to our newsletter for special offers</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            <i class="fa fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title">Find Us</h2>
                <p class="text-muted lead">Visit us at our prime location in the city center</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="map-container rounded shadow-lg overflow-hidden">
                    <!-- Google Maps Embed -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.177631294649!2d-74.00594908459418!3d40.71274377933085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316e12b29d%3A0x2e2d0b5b5b5b5b5b!2s123%20Luxury%20St%2C%20New%20York%2C%20NY%2010001!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="text-muted lead">Quick answers to common questions</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="card mb-3 shadow-sm">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link w-100 text-left d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What are your check-in and check-out times?
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                Check-in time is 3:00 PM and check-out time is 11:00 AM. Early check-in and late check-out may be available upon request, subject to availability and additional charges.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3 shadow-sm">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link w-100 text-left d-flex justify-content-between align-items-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you offer airport transportation?
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                Yes, we offer airport transportation services for an additional fee. Please contact our concierge at least 24 hours in advance to arrange pickup or drop-off.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3 shadow-sm">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link w-100 text-left d-flex justify-content-between align-items-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is parking available at the hotel?
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                Yes, we offer complimentary valet parking for all registered guests. Our secure underground parking facility is available 24/7.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3 shadow-sm">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link w-100 text-left d-flex justify-content-between align-items-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you have facilities for business meetings?
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                            <div class="card-body">
                                Absolutely! We have three fully-equipped meeting rooms that can accommodate from 10 to 100 people. Our business center offers printing, copying, and secretarial services.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow-sm">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link w-100 text-left d-flex justify-content-between align-items-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What is your cancellation policy?
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                            <div class="card-body">
                                Cancellations made 48 hours or more prior to arrival will not incur any charges. Cancellations within 48 hours of arrival will be charged for the first night. Special rates and packages may have different cancellation policies.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <div class="emergency-contact p-4 rounded">
                    <i class="fa fa-phone fa-3x mb-3"></i>
                    <h3 class="mb-3">24/7 Emergency Contact</h3>
                    <p class="lead mb-4">For urgent matters outside of regular business hours, please call our emergency line</p>
                    <div class="emergency-number">
                        <h2 class="display-4 font-weight-bold">+1 (555) 911-HELP</h2>
                    </div>
                    <p class="mt-3">Available for urgent guest needs and emergencies only</p>
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
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(to right, #3498db, #e74c3c);
    }
    
    .contact-hero {
        position: relative;
    }
    
    .contact-form-card {
        background: white;
        border: 1px solid #f0f0f0;
    }
    
    .contact-item {
        transition: transform 0.3s ease;
    }
    
    .contact-item:hover {
        transform: translateX(5px);
    }
    
    .contact-icon {
        width: 50px;
        text-align: center;
    }
    
    .social-link {
        transition: transform 0.3s ease;
        display: inline-block;
    }
    
    .social-link:hover {
        transform: translateY(-3px);
    }
    
    .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #e0e0e0;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    
    .form-label {
        font-weight: 600;
        margin-bottom: 8px;
        color: #333;
    }
    
    .btn-primary {
        background: linear-gradient(to right, #3498db, #2980b9);
        border: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        padding: 12px 30px;
    }
    
    .btn-primary:hover {
        background: linear-gradient(to right, #2980b9, #3498db);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    .map-container {
        height: 450px;
    }
    
    .accordion .card-header {
        background: white;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .accordion .btn-link {
        color: #333;
        text-decoration: none;
        font-weight: 600;
        padding: 15px 20px;
    }
    
    .accordion .btn-link:hover {
        color: #3498db;
    }
    
    .accordion .btn-link:not(.collapsed) {
        color: #3498db;
    }
    
    .accordion .card-body {
        padding: 20px;
    }
    
    .emergency-contact {
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .contact-form-card {
            padding: 2rem !important;
        }
        
        .emergency-number .display-4 {
            font-size: 2.5rem;
        }
    }
</style>

<script>
    // Simple form validation and submission handling
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            if (!firstName || !lastName || !email || !subject || !message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // In a real application, you would send the form data to your server here
            // For demonstration, we'll just show a success message
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });
    });
</script>

@endsection