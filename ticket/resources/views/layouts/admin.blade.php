<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Hotel Management System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #1abc9c;
        }
        
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        .sidebar {
            background-color: var(--secondary-color);
            color: white;
            min-height: 100vh;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            margin: 4px 0;
            border-radius: 5px;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .main-content {
            padding: 20px;
            transition: all 0.3s;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 15px 0;
            margin-top: 30px;
        }
        
        .sidebar.collapsed {
            margin-left: -250px;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 1000;
                margin-left: 0;
            }
            
            .sidebar.collapsed {
                margin-left: -250px;
            }
            
            .main-content {
                width: 100%;
            }
            
            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999;
            }
            
            .overlay.active {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="btn btn-sm" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <a class="navbar-brand fw-bold ms-3" href="#">
                <i class="fas fa-hotel text-danger me-2"></i>
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar px-0" id="sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bookingsCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="bookingsCollapse">
                                <i class="fas fa-calendar-check"></i>
                                Bookings
                                <i class="fas fa-chevron-down float-end mt-1"></i>
                            </a>
                            <div class="collapse" id="bookingsCollapse">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-plus-circle"></i>
                                            New Bookings
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-history"></i>
                                            History
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roomsCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="roomsCollapse">
                                <i class="fas fa-bed"></i>
                                Rooms
                                <i class="fas fa-chevron-down float-end mt-1"></i>
                            </a>
                            <div class="collapse" id="roomsCollapse">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('rooms.create') }}">
                                            <i class="fas fa-plus"></i>
                                            New Room
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('rooms.index') }}">
                                            <i class="fas fa-list"></i>
                                            All Rooms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users') }}">
                                <i class="fas fa-users"></i>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.analytics') }}">
                                <i class="fas fa-chart-line"></i>
                                Analytics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.settings') }}">
                                <i class="fas fa-cogs"></i>
                                Settings
                            </a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.settings') }}">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 main-content" id="mainContent">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid text-center">
            <p class="mb-0">© 2023 Hotel Management System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle functionality
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
            
            // Create overlay for mobile
            if (window.innerWidth <= 768) {
                let overlay = document.querySelector('.overlay');
                if (!overlay) {
                    overlay = document.createElement('div');
                    overlay.className = 'overlay';
                    document.body.appendChild(overlay);
                    
                    overlay.addEventListener('click', function() {
                        sidebar.classList.add('collapsed');
                        overlay.classList.remove('active');
                    });
                }
                
                if (sidebar.classList.contains('collapsed')) {
                    overlay.classList.remove('active');
                } else {
                    overlay.classList.add('active');
                }
            }
        });
    </script>
</body>
</html>