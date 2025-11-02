@extends('layouts.header')
@section('title','Login Here')
@section('content')

<!-- Hero Section -->
<section class="login-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; min-height: 40vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-white text-center">
                <h1 class="display-4 mb-4 font-weight-bold">Welcome Back</h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Sign in to your account and continue your journey with us</p>
            </div>
        </div>
    </div>
</section>

<!-- Login Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 60vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-card card border-0 shadow-lg rounded-lg">
                    <div class="card-header bg-primary text-white text-center py-4 border-0">
                        <h3 class="mb-0 font-weight-bold">
                            <i class="fa fa-user-circle mr-2"></i>Welcome to Login
                        </h3>
                        <p class="mb-0 mt-2 opacity-75">Sign in to access your account</p>
                    </div>

                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="form-group mb-4">
                                <label for="email" class="form-label font-weight-bold text-dark">
                                    <i class="fa fa-envelope text-primary mr-2"></i>Email Address
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0">
                                            <i class="fa fa-user text-muted"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror border-left-0" 
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
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
                                           name="password" required autocomplete="current-password"
                                           placeholder="Enter your password">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-light border-left-0">
                                            <i class="fa fa-eye text-muted" id="togglePassword" style="cursor: pointer;"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="form-group mb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="remember">
                                            <i class="fa fa-check-circle text-primary mr-1"></i>Remember Me
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="text-primary font-weight-bold" href="{{ route('password.request') }}">
                                            <i class="fa fa-question-circle mr-1"></i>Forgot Your Password?
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block py-3 font-weight-bold">
                                    <i class="fa fa-sign-in mr-2"></i>Login to Your Account
                                </button>
                            </div>

                            <!-- Register Link -->
                            <div class="text-center">
                                <p class="text-muted mb-0">Don't have an account? 
                                    <a href="{{ route('register') }}" class="text-primary font-weight-bold">
                                        <i class="fa fa-user-plus mr-1"></i>Create Account
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Security Features -->
                <div class="security-features text-center mt-4">
                    <div class="d-flex justify-content-center">
                        <div class="mx-3">
                            <i class="fa fa-shield-alt text-success fa-lg mb-2"></i>
                            <div class="small text-muted">Secure Login</div>
                        </div>
                        <div class="mx-3">
                            <i class="fa fa-lock text-success fa-lg mb-2"></i>
                            <div class="small text-muted">Data Encrypted</div>
                        </div>
                        <div class="mx-3">
                            <i class="fa fa-user-shield text-success fa-lg mb-2"></i>
                            <div class="small text-muted">Privacy Protected</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .login-hero {
        position: relative;
    }
    
    .login-card {
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .login-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
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
    
    .divider {
        color: #6c757d;
    }
    
    .security-features .d-flex > div {
        transition: transform 0.3s ease;
    }
    
    .security-features .d-flex > div:hover {
        transform: translateY(-3px);
    }
    
    .text-primary {
        color: #3498db !important;
    }
    
    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 5px;
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
        
        .d-flex.justify-content-between {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .d-flex.justify-content-between a {
            margin-top: 10px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
        
        // Add loading state to login button
        const loginForm = document.querySelector('form');
        const loginButton = document.querySelector('button[type="submit"]');
        
        loginForm.addEventListener('submit', function() {
            loginButton.innerHTML = '<i class="fa fa-spinner fa-spin mr-2"></i>Signing In...';
            loginButton.disabled = true;
        });
        
        // Add focus effects to form inputs
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.parentElement.classList.remove('focused');
            });
        });
    });
</script>

@endsection