@extends('layouts.admin')
@section('title','All Rooms')
@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fa fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if(session('warning'))
        <div class="alert alert-warning alert-dismissible fade show">
            <i class="fa fa-exclamation-triangle me-2"></i> {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="fa fa-hotel me-2"></i>Room Management
            </h5>
            <a href="{{ route('rooms.create') }}" class="btn btn-light btn-sm">
                <i class="fa fa-plus-circle me-1"></i> Add New Room
            </a>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-danger">
                        <tr>
                            <th><i class="fa fa-image me-1"></i> Image</th>
                            <th><i class="fa fa-hashtag me-1"></i> Room #</th>
                            <th><i class="fa fa-tag me-1"></i> Type</th>
                            <th><i class="fa fa-building me-1"></i> Floor</th>
                            <th><i class="fa fa-users me-1"></i> Capacity</th>
                            <th><i class="fa fa-dollar-sign me-1"></i> Price</th>
                            <th><i class="fa fa-bed me-1"></i> Bed Type</th>
                            <th><i class="fa fa-circle me-1"></i> Status</th>
                            <th><i class="fa fa-cogs me-1"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rooms as $room)
                        <tr>
                            <td>
                                @if($room->image)
                                    <img src="{{ asset('storage/' . $room->image) }}" alt="Room {{ $room->room_number }}" 
                                         class="rounded" style="width: 50px; height: 40px; object-fit: cover;">
                                @else
                                    <div class="text-center text-muted">
                                        <i class="fa fa-image fa-lg"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="fw-bold">{{ $room->room_number }}</td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    <i class="fa fa-tag me-1"></i>{{ ucfirst($room->room_type) }}
                                </span>
                            </td>
                            <td>
                                <i class="fa fa-building text-secondary me-1"></i>{{ $room->floor }}
                            </td>
                            <td>
                                <i class="fa fa-users text-primary me-1"></i>{{ $room->capacity }}
                            </td>
                            <td class="fw-bold text-success">
                                <i class="fa fa-dollar-sign me-1"></i>{{ number_format($room->price_per_night, 2) }}
                            </td>
                            <td>
                                <i class="fa fa-bed text-warning me-1"></i>{{ ucfirst($room->bed_type) }}
                            </td>
                            <td>
                                @php
                                    $statusConfig = [
                                        'available' => ['bg-success', 'fa-check-circle'],
                                        'occupied' => ['bg-danger', 'fa-times-circle'],
                                        'maintenance' => ['bg-warning text-dark', 'fa-tools'],
                                        'cleaning' => ['bg-info', 'fa-broom']
                                    ];
                                    $config = $statusConfig[$room->status] ?? ['bg-secondary', 'fa-circle'];
                                @endphp
                                <span class="badge {{ $config[0] }}">
                                    <i class="fa {{ $config[1] }} me-1"></i>{{ ucfirst($room->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <!-- View Button -->
                                    <a href="{{ route('rooms.show',$room->id) }}">
                                    <button class="btn btn-info" title="View Room">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    </a>
                                    <!-- Edit Button -->
                                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning" title="Edit Room">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <!-- Delete Button -->
                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" 
                                                onclick="return confirm('Are you sure you want to delete room {{ $room->room_number }}?')"
                                                title="Delete Room">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center py-4">
                                <i class="fa fa-hotel fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted">No Rooms Found</h5>
                                <p class="text-muted">Get started by adding your first room.</p>
                                <a href="{{ route('rooms.create') }}" class="btn btn-primary">
                                    <i class="fa fa-plus-circle me-1"></i> Add New Room
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .table th {
            border-top: none;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .btn-group .btn {
            border-radius: 0;
        }
        .btn-group .btn:first-child {
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }
        .btn-group .btn:last-child {
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
        }
    </style>
@endsection