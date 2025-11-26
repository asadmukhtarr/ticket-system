@extends('layouts.admin')
@section('title', 'Room Details - #' . $room->room_number)
@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">
                <i class="fa fa-hotel text-primary me-2"></i>Room Details
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('rooms.index') }}">Rooms</a></li>
                    <li class="breadcrumb-item active">{{ $room->room_number }}</li>
                </ol>
            </nav>
        </div>
        <div class="btn-group">
            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">
                <i class="fa fa-edit me-1"></i> Edit Room
            </a>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left me-1"></i> Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Main Room Information -->
        <div class="col-lg-8">
            <!-- Room Image & Basic Info Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="card-title mb-0">
                        <i class="fa fa-info-circle me-2"></i>Basic Information
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Room Image -->
                        <div class="col-md-5 mb-3">
                            <div class="room-image-container">
                                @if($room->image)
                                    <img src="{{ asset('storage/' . $room->image) }}" 
                                         alt="Room {{ $room->room_number }}" 
                                         class="img-fluid rounded shadow-sm">
                                @else
                                    <div class="no-image bg-light rounded d-flex align-items-center justify-content-center" 
                                         style="height: 250px;">
                                        <div class="text-center text-muted">
                                            <i class="fa fa-hotel fa-4x mb-3"></i>
                                            <p class="mb-0">No Image Available</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Room Details -->
                        <div class="col-md-7">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label text-muted small mb-1">
                                        <i class="fa fa-hashtag me-1"></i>Room Number
                                    </label>
                                    <h4 class="fw-bold text-primary">{{ $room->room_number }}</h4>
                                </div>
                                <div class="col-6">
                                    <label class="form-label text-muted small mb-1">
                                        <i class="fa fa-tag me-1"></i>Room Type
                                    </label>
                                    <h4 class="fw-bold text-success">{{ ucfirst($room->room_type) }}</h4>
                                </div>
                                
                                <div class="col-6">
                                    <label class="form-label text-muted small mb-1">
                                        <i class="fa fa-building me-1"></i>Floor
                                    </label>
                                    <p class="fw-semibold mb-0">
                                        <i class="fa fa-level-up text-info me-1"></i>Floor {{ $room->floor }}
                                    </p>
                                </div>
                                <div class="col-6">
                                    <label class="form-label text-muted small mb-1">
                                        <i class="fa fa-users me-1"></i>Capacity
                                    </label>
                                    <p class="fw-semibold mb-0">
                                        <i class="fa fa-user text-warning me-1"></i>{{ $room->capacity }} Persons
                                    </p>
                                </div>
                                
                                <div class="col-6">
                                    <label class="form-label text-muted small mb-1">
                                        <i class="fa fa-money me-1"></i>Price Per Night
                                    </label>
                                    <h5 class="fw-bold text-success mb-0">
                                        <i class="fa fa-dollar-sign me-1"></i>{{ number_format($room->price_per_night, 2) }}
                                    </h5>
                                </div>
                                <div class="col-6">
                                    <label class="form-label text-muted small mb-1">
                                        <i class="fa fa-bed me-1"></i>Bed Type
                                    </label>
                                    <p class="fw-semibold mb-0">
                                        <i class="fa fa-bed text-primary me-1"></i>
                                        {{ $room->bed_type ? ucfirst($room->bed_type) : 'Not Specified' }}
                                    </p>
                                </div>
                                
                                <div class="col-12">
                                    <label class="form-label text-muted small mb-1">
                                        <i class="fa fa-flag me-1"></i>Status
                                    </label>
                                    <div>
                                        @php
                                            $statusConfig = [
                                                'available' => ['bg-success', 'fa-check-circle', 'Available'],
                                                'occupied' => ['bg-danger', 'fa-times-circle', 'Occupied'],
                                                'maintenance' => ['bg-warning text-dark', 'fa-tools', 'Under Maintenance'],
                                                'cleaning' => ['bg-info', 'fa-broom', 'Cleaning in Progress']
                                            ];
                                            $config = $statusConfig[$room->status] ?? ['bg-secondary', 'fa-circle', $room->status];
                                        @endphp
                                        <span class="badge {{ $config[0] }} fs-6 px-3 py-2">
                                            <i class="fa {{ $config[1] }} me-2"></i>{{ $config[2] }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description & Details Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-info text-white py-3">
                    <h5 class="card-title mb-0">
                        <i class="fa fa-file-text me-2"></i>Room Description & Details
                    </h5>
                </div>
                <div class="card-body">
                    @if($room->description)
                        <div class="mb-4">
                            <label classform-label fw-semibold text-muted mb-2">
                                <i class="fa fa-align-left me-1"></i>Description
                            </label>
                            <div class="p-3 bg-light rounded">
                                <p class="mb-0">{{ $room->description }}</p>
                            </div>
                        </div>
                    @endif
                    
                    <div class="row">
                        @if($room->room_size)
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <div class="bg-primary rounded p-3 me-3">
                                    <i class="fa fa-arrows text-white fa-lg"></i>
                                </div>
                                <div>
                                    <label class="form-label text-muted small mb-0">Room Size</label>
                                    <h5 class="fw-bold mb-0">{{ $room->room_size }} sq ft</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <div class="bg-success rounded p-3 me-3">
                                    <i class="fa fa-calendar text-white fa-lg"></i>
                                </div>
                                <div>
                                    <label class="form-label text-muted small mb-0">Last Updated</label>
                                    <h5 class="fw-bold mb-0">{{ $room->updated_at->format('M d, Y') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Information -->
        <div class="col-lg-4">
            <!-- Amenities Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white py-3">
                    <h5 class="card-title mb-0">
                        <i class="fa fa-wifi me-2"></i>Room Amenities
                    </h5>
                </div>
                <div class="card-body">
                    @php
                        $amenities = $room->amenities ? json_decode($room->amenities, true) : [];
                        $amenityIcons = [
                            'wifi' => ['fa-wifi', 'text-primary', 'WiFi'],
                            'tv' => ['fa-television', 'text-info', 'Television'],
                            'ac' => ['fa-snowflake-o', 'text-success', 'Air Conditioning'],
                            'heating' => ['fa-fire', 'text-warning', 'Heating'],
                            'minibar' => ['fa-glass', 'text-muted', 'Minibar'],
                            'safe' => ['fa-lock', 'text-dark', 'Safe'],
                            'balcony' => ['fa-building', 'text-info', 'Balcony'],
                            'view' => ['fa-binoculars', 'text-success', 'Sea View']
                        ];
                    @endphp
                    
                    @if(count($amenities) > 0)
                        <div class="row g-2">
                            @foreach($amenities as $amenity)
                                @if(isset($amenityIcons[$amenity]))
                                    @php $icon = $amenityIcons[$amenity]; @endphp
                                    <div class="col-6 mb-2">
                                        <div class="d-flex align-items-center p-2 border rounded">
                                            <i class="fa {{ $icon[0] }} {{ $icon[1] }} me-2"></i>
                                            <span class="small">{{ $icon[2] }}</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="text-center text-muted py-4">
                            <i class="fa fa-wifi fa-3x mb-3"></i>
                            <p class="mb-0">No amenities specified</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Quick Actions Card -->
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark py-3">
                    <h5 class="card-title mb-0">
                        <i class="fa fa-bolt me-2"></i>Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-edit me-1"></i> Edit This Room
                        </a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-grid">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm" 
                                    onclick="return confirm('Are you sure you want to delete room {{ $room->room_number }}?')">
                                <i class="fa fa-trash me-1"></i> Delete This Room
                            </button>
                        </form>
                        <a href="{{ route('rooms.create') }}" class="btn btn-outline-success btn-sm">
                            <i class="fa fa-plus me-1"></i> Add New Room
                        </a>
                        <a href="{{ route('rooms.index') }}" class="btn btn-outline-secondary btn-sm">
                            <i class="fa fa-list me-1"></i> View All Rooms
                        </a>
                    </div>
                </div>
            </div>

            <!-- Room Statistics -->
            <div class="card shadow-sm mt-4">
                <div class="card-header bg-secondary text-white py-3">
                    <h5 class="card-title mb-0">
                        <i class="fa fa-chart-bar me-2"></i>Room Information
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="border rounded p-2">
                                <i class="fa fa-hashtag fa-2x text-primary mb-2"></i>
                                <h6 class="mb-0">Room #</h6>
                                <h5 class="fw-bold mb-0">{{ $room->room_number }}</h5>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="border rounded p-2">
                                <i class="fa fa-users fa-2x text-success mb-2"></i>
                                <h6 class="mb-0">Capacity</h6>
                                <h5 class="fw-bold mb-0">{{ $room->capacity }}</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded p-2">
                                <i class="fa fa-building fa-2x text-info mb-2"></i>
                                <h6 class="mb-0">Floor</h6>
                                <h5 class="fw-bold mb-0">{{ $room->floor }}</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded p-2">
                                <i class="fa fa-money fa-2x text-warning mb-2"></i>
                                <h6 class="mb-0">Price/Night</h6>
                                <h5 class="fw-bold mb-0">${{ $room->price_per_night }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.room-image-container img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border: 3px solid #e9ecef;
    transition: transform 0.3s ease;
}

.room-image-container img:hover {
    transform: scale(1.02);
}

.no-image {
    border: 2px dashed #dee2e6;
}

.card {
    border: none;
    border-radius: 0.5rem;
}

.card-header {
    border-radius: 0.5rem 0.5rem 0 0 !important;
}

.breadcrumb {
    background: transparent;
    padding: 0;
}

.breadcrumb-item a {
    color: #6c757d;
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #495057;
}

.btn-group .btn {
    border-radius: 0.375rem;
    margin-left: 0.5rem;
}

.form-label {
    font-weight: 500;
}
</style>
@endsection