@extends('layouts.header')
@section('title','Register Here')
@section('content')

<!-- Hero Section -->
<section class="register-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 40vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-white text-center">
                <h1 class="display-4 mb-4 font-weight-bold">Join Our Community</h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Create your account and unlock exclusive benefits</p>
            </div>
        </div>
    </div>
</section>

<!-- Register Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 80vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="register-card card border-0 shadow-lg rounded-lg">
                    <div class="card-header bg-primary text-white text-center py-4 border-0">
                        <h3 class="mb-0 font-weight-bold">
                            <i class="fa fa-user-plus mr-2"></i>Create Your Account
                        </h3>
                        <p class="mb-0 mt-2 opacity-75">Join thousands of happy guests</p>
                    </div>

                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name Input -->
                            <div class="form-group mb-4">
                                <label for="name" class="form-label font-weight-bold text-dark">
                                    <i class="fa fa-user text-primary mr-2"></i>Full Name
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0">
                                            <i class="fa fa-id-card text-muted"></i>
                                        </span>
                                    </div>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border-left-0" 
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                           placeholder="Enter your full name">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email Input -->
                            <div class="form-group mb-4">
                                <label for="email" class="form-label font-weight-bold text-dark">
                                    <i class="fa fa-envelope text-primary mr-2"></i>Email Address
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0">
                                            <i class="fa fa-at text-muted"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror border-left-0" 
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                           placeholder="Enter your email address">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="form-group mb-4">
                                <label for="password" class="form-label font-weight-bold text-dark">
                                    <i class="fa fa-lock text-primary mr-2"></i>Password
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0">
                                            <i class="fa fa-key text-muted"></i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror border-left-0" 
                                           name="password" required autocomplete="new-password"
                                           placeholder="Create a strong password">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-light border-left-0">
                                            <i class="fa fa-eye text-muted toggle-password" style="cursor: pointer;"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small class="form-text text-muted mt-2">
                                    <i class="fa fa-info-circle mr-1"></i>Use 8+ characters with mix of letters, numbers & symbols
                                </small>
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="form-group mb-4">
                                <label for="password-confirm" class="form-label font-weight-bold text-dark">
                                    <i class="fa fa-lock text-primary mr-2"></i>Confirm Password
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0">
                                            <i class="fa fa-key text-muted"></i>
                                        </span>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control border-left-0" 
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="Confirm your password">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-light border-left-0">
                                            <i class="fa fa-eye text-muted toggle-password" style="cursor: pointer;"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="form-group mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label text-dark" for="terms">
                                        I agree to the <a href="#" class="text-primary font-weight-bold">Terms of Service</a> 
                                        and <a href="#" class="text-primary font-weight-bold">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>

                            <!-- Register Button -->
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block py-3 font-weight-bold">
                                    <i class="fa fa-user-plus mr-2"></i>Create My Account
                                </button>
                            </div>

                            <!-- Divider -->
                            <div class="text-center mb-4">
                                <div class="divider d-flex align-items-center">
                                    <span class="flex-grow-1 bg-light" style="height: 1px;"></span>
                                    <span class="px-3 text-muted">or sign up with</span>
                                    <span class="flex-grow-1 bg-light" style="height: 1px;"></span>
                                </div>
                            </div>

                            <!-- Social Register -->
                            <div class="form-group mb-4">
                                <div class="row">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-primary btn-block">
                                            <i class="fa fa-google"></i>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-info btn-block">
                                            <i class="fa fa-facebook"></i>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-dark btn-block">
                                            <i class="fa fa-apple"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Login Link -->
                            <div class="text-center">
                                <p class="text-muted mb-0">Already have an account? 
                                    <a href="{{ route('login') }}" class="text-primary font-weight-bold">
                                        <i class="fa fa-sign-in mr-1"></i>Sign In
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Benefits Section -->
                <div class="benefits-card card border-0 shadow-sm mt-4">
                    <div class="card-body p-4 text-center">
                        <h5 class="text-primary mb-3">
                            <i class="fa fa-gift mr-2"></i>Member Benefits
                        </h5>
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-percent text-success fa-lg mb-2"></i>
                                <div class="small text-muted">Exclusive Deals</div>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-star text-warning fa-lg mb-2"></i>
                                <div class="small text-muted">Reward Points</div>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-bolt text-info fa-lg mb-2"></i>
                                <div class="small text-muted">Quick Booking</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .register-hero {
        position: relative;
    }
    
    .register-card {
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .register-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
    }
    
    .benefits-card {
        border-radius: 15px;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    }
    
    .card-header {
        border-radius: 20px 20px 0 0 !important;
    }
    
    .form-label {
        font-weight: 600;
        margin-bottom: 10px;
        font-size: 1rem;
    }
    
    .form-control {
        border-radius: 12px;
        border: 2px solid #e8eeff;
        padding: 15px 20px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8faff;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.15);
        background: white;
    }
    
    .input-group-text {
        border-radius: 12px;
        border: 2px solid #e8eeff;
        background: #f8faff;
        border-right: none;
    }
    
    .input-group .form-control.border-left-0 {
        border-left: none;
    }
    
    .input-group-append .input-group-text {
        border-left: none;
        border-right: 2px solid #e8eeff;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #3498db, #2980b9);
        border: none;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, #2980b9, #3498db);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
    }
    
    .btn-outline-primary, 
    .btn-outline-info, 
    .btn-outline-dark {
        border-radius: 12px;
        padding: 12px;
        transition: all 0.3s ease;
    }
    
    .btn-outline-primary:hover,
    .btn-outline-info:hover,
    .btn-outline-dark:hover {
        transform: translateY(-2px);
    }
    
    .form-check-input {
        width: 1.2em;
        height: 1.2em;
        margin-top: 0.2em;
    }
    
    .form-check-input:checked {
        background-color: #3498db;
        border-color: #3498db;
    }
    
    .form-check-label {
        font-size: 0.95rem;
    }
    
    .divider {
        color: #6c757d;
    }
    
    .benefits-card .row > div {
        transition: transform 0.3s ease;
    }
    
    .benefits-card .row > div:hover {
        transform: translateY(-3px);
    }
    
    .text-primary {
        color: #3498db !important;
    }
    
    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 5px;
    }
    
    .form-text {
        font-size: 0.85rem;
    }
    
    @media (max-width: 768px) {
        .display-4 {
            font-size: 2.5rem;
        }
        
        .card-body {
            padding: 2rem !important;
        }
        
        .btn-lg {
            padding: 12px 20px;
            font-size: 1rem;
        }
        
        .benefits-card .row {
            flex-direction: column;
            gap: 15px;
        }
        
        .benefits-card .col-4 {
            width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility for both password fields
        const toggleButtons = document.querySelectorAll('.toggle-password');
        
        toggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.closest('.input-group').querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });
        
        // Password strength indicator (optional enhancement)
        const passwordInput = document.getElementById('password');
        const confirmInput = document.getElementById('password-confirm');
        
        function checkPasswordMatch() {
            if (passwordInput.value && confirmInput.value) {
                if (passwordInput.value !== confirmInput.value) {
                    confirmInput.style.borderColor = '#e74c3c';
                } else {
                    confirmInput.style.borderColor = '#2ecc71';
                }
            }
        }
        
        passwordInput.addEventListener('input', checkPasswordMatch);
        confirmInput.addEventListener('input', checkPasswordMatch);
        
        // Add loading state to register button
        const registerForm = document.querySelector('form');
        const registerButton = document.querySelector('button[type="submit"]');
        
        registerForm.addEventListener('submit', function() {
            registerButton.innerHTML = '<i class="fa fa-spinner fa-spin mr-2"></i>Creating Account...';
            registerButton.disabled = true;
        });
        
        // Terms and conditions validation
        const termsCheckbox = document.getElementById('terms');
        
        registerForm.addEventListener('submit', function(e) {
            if (!termsCheckbox.checked) {
                e.preventDefault();
                alert('Please agree to the Terms of Service and Privacy Policy.');
                termsCheckbox.focus();
            }
        });
    });
</script>

@endsection