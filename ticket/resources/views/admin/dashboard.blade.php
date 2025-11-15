@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Today</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">This Week</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">This Month</button>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Rooms</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">42</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bed fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Active Bookings</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Available Rooms</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">24</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-door-open fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts and Tables Row -->
<div class="row">
    <!-- Occupancy Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Monthly Occupancy Rate</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="occupancyChart" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Recent Activities</h6>
            </div>
            <div class="card-body">
                <div class="activity-feed">
                    <div class="feed-item d-flex mb-3">
                        <div class="feed-icon bg-success rounded-circle p-2 me-3">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div>
                            <small class="text-muted">10 min ago</small>
                            <p class="mb-0">Room 201 checked in</p>
                        </div>
                    </div>
                    <div class="feed-item d-flex mb-3">
                        <div class="feed-icon bg-primary rounded-circle p-2 me-3">
                            <i class="fas fa-calendar text-white"></i>
                        </div>
                        <div>
                            <small class="text-muted">1 hour ago</small>
                            <p class="mb-0">New booking for Suite 102</p>
                        </div>
                    </div>
                    <div class="feed-item d-flex mb-3">
                        <div class="feed-icon bg-warning rounded-circle p-2 me-3">
                            <i class="fas fa-exclamation text-white"></i>
                        </div>
                        <div>
                            <small class="text-muted">2 hours ago</small>
                            <p class="mb-0">Maintenance request for Room 305</p>
                        </div>
                    </div>
                    <div class="feed-item d-flex mb-3">
                        <div class="feed-icon bg-info rounded-circle p-2 me-3">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <small class="text-muted">3 hours ago</small>
                            <p class="mb-0">New staff member registered</p>
                        </div>
                    </div>
                    <div class="feed-item d-flex">
                        <div class="feed-icon bg-danger rounded-circle p-2 me-3">
                            <i class="fas fa-door-closed text-white"></i>
                        </div>
                        <div>
                            <small class="text-muted">5 hours ago</small>
                            <p class="mb-0">Room 107 checked out</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Bookings Table -->
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Recent Bookings</h6>
                <a href="#" class="btn btn-primary btn-sm">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Guest Name</th>
                                <th>Room</th>
                                <th>Check-in</th>
                                <th>Check-out</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#BK001</td>
                                <td>John Smith</td>
                                <td>Deluxe Suite 201</td>
                                <td>2023-11-15</td>
                                <td>2023-11-18</td>
                                <td><span class="badge bg-success">Checked In</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BK002</td>
                                <td>Sarah Johnson</td>
                                <td>Standard Room 105</td>
                                <td>2023-11-16</td>
                                <td>2023-11-20</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BK003</td>
                                <td>Michael Brown</td>
                                <td>Executive Suite 305</td>
                                <td>2023-11-12</td>
                                <td>2023-11-15</td>
                                <td><span class="badge bg-danger">Checked Out</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BK004</td>
                                <td>Emily Davis</td>
                                <td>Family Room 408</td>
                                <td>2023-11-18</td>
                                <td>2023-11-22</td>
                                <td><span class="badge bg-info">Confirmed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BK005</td>
                                <td>Robert Wilson</td>
                                <td>Standard Room 112</td>
                                <td>2023-11-20</td>
                                <td>2023-11-25</td>
                                <td><span class="badge bg-secondary">Cancelled</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional CSS -->
<style>
    .border-left-primary { border-left: 0.25rem solid #4e73df !important; }
    .border-left-success { border-left: 0.25rem solid #1cc88a !important; }
    .border-left-info { border-left: 0.25rem solid #36b9cc !important; }
    .border-left-warning { border-left: 0.25rem solid #f6c23e !important; }
    
    .card {
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
    }
    
    .feed-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .chart-area {
        position: relative;
        height: 300px;
        width: 100%;
    }
</style>

<!-- Chart.js Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Occupancy Chart
        const ctx = document.getElementById('occupancyChart').getContext('2d');
        const occupancyChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Occupancy Rate (%)',
                    data: [65, 70, 75, 80, 85, 90, 95, 92, 88, 82, 78, 72],
                    borderColor: '#4e73df',
                    backgroundColor: 'rgba(78, 115, 223, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });
    });
</script>
@endsection