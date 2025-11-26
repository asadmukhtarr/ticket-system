@extends('layouts.admin')
@section('title','Edit Room - ' . $room->room_number)
@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="card-title mb-0 p-2">
            <i class="fa fa-edit me-2"></i> Edit Room - {{ $room->room_number }}
        </h5>
    </div>
    <div class="card-body">
        <form id="editRoomForm" action="{{ route('rooms.update', $room->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            
            <!-- Current Image Display -->
            @if($room->image)
            <div class="row mb-4">
                <div class="col-12">
                    <div class="current-image-section border rounded p-3 bg-light">
                        <label class="form-label fw-bold">
                            <i class="fa fa-image me-2"></i>Current Room Image
                        </label>
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('storage/' . $room->image) }}" 
                                 alt="Room {{ $room->room_number }}" 
                                 class="img-thumbnail" 
                                 style="max-height: 150px;">
                            <div class="flex-grow-1">
                                <p class="mb-1 text-muted">Current room image</p>
                                <small class="text-muted">Upload a new image below to replace this one</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                <!-- Room Number -->
                <div class="col-md-6 mb-3">
                    <label for="roomNumber" class="form-label">
                        <i class="fa fa-hashtag me-1"></i> Room Number <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-building text-primary"></i></span>
                        <input type="text" class="form-control @error('room_number') is-invalid @enderror" 
                               id="roomNumber" name="room_number" 
                               value="{{ old('room_number', $room->room_number) }}" 
                               placeholder="e.g., 101" required>
                    </div>
                    @error('room_number')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Room Type -->
                <div class="col-md-6 mb-3">
                    <label for="roomType" class="form-label">
                        <i class="fa fa-bed me-1"></i> Room Type <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-tag text-primary"></i></span>
                        <select class="form-select @error('room_type') is-invalid @enderror" 
                                id="roomType" name="room_type" required>
                            <option value="">Select Room Type</option>
                            <option value="single" {{ old('room_type', $room->room_type) == 'single' ? 'selected' : '' }}>Single Room</option>
                            <option value="double" {{ old('room_type', $room->room_type) == 'double' ? 'selected' : '' }}>Double Room</option>
                            <option value="twin" {{ old('room_type', $room->room_type) == 'twin' ? 'selected' : '' }}>Twin Room</option>
                            <option value="suite" {{ old('room_type', $room->room_type) == 'suite' ? 'selected' : '' }}>Suite</option>
                            <option value="deluxe" {{ old('room_type', $room->room_type) == 'deluxe' ? 'selected' : '' }}>Deluxe Room</option>
                            <option value="executive" {{ old('room_type', $room->room_type) == 'executive' ? 'selected' : '' }}>Executive Suite</option>
                            <option value="presidential" {{ old('room_type', $room->room_type) == 'presidential' ? 'selected' : '' }}>Presidential Suite</option>
                        </select>
                    </div>
                    @error('room_type')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Floor -->
                <div class="col-md-4 mb-3">
                    <label for="floor" class="form-label">
                        <i class="fa fa-building me-1"></i> Floor <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-level-up text-primary"></i></span>
                        <input type="number" class="form-control @error('floor') is-invalid @enderror" 
                               id="floor" name="floor" 
                               value="{{ old('floor', $room->floor) }}" 
                               min="1" max="50" placeholder="Floor number" required>
                    </div>
                    @error('floor')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Capacity -->
                <div class="col-md-4 mb-3">
                    <label for="capacity" class="form-label">
                        <i class="fa fa-users me-1"></i> Capacity <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-user text-primary"></i></span>
                        <input type="number" class="form-control @error('capacity') is-invalid @enderror" 
                               id="capacity" name="capacity" 
                               value="{{ old('capacity', $room->capacity) }}" 
                               min="1" max="10" placeholder="Number of guests" required>
                    </div>
                    @error('capacity')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Price Per Night -->
                <div class="col-md-4 mb-3">
                    <label for="price" class="form-label">
                        <i class="fa fa-money me-1"></i> Price Per Night ($) <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-usd text-primary"></i></span>
                        <input type="number" class="form-control @error('price_per_night') is-invalid @enderror" 
                               id="price" name="price_per_night" 
                               value="{{ old('price_per_night', $room->price_per_night) }}" 
                               step="0.01" min="0" max="99999.99" placeholder="0.00" required>
                    </div>
                    @error('price_per_night')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <!-- Room Size & Bed Type -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="roomSize" class="form-label">
                        <i class="fa fa-arrows me-1"></i> Room Size (sq ft)
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-expand text-primary"></i></span>
                        <input type="number" class="form-control @error('room_size') is-invalid @enderror" 
                               id="roomSize" name="room_size" 
                               value="{{ old('room_size', $room->room_size) }}" 
                               min="0" max="5000" placeholder="e.g., 350">
                        <span class="input-group-text">sq ft</span>
                    </div>
                    @error('room_size')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <!-- Bed Type -->
                <div class="col-md-6 mb-3">
                    <label for="bedType" class="form-label">
                        <i class="fa fa-bed me-1"></i> Bed Type
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-moon-o text-primary"></i></span>
                        <select class="form-select @error('bed_type') is-invalid @enderror" 
                                id="bedType" name="bed_type">
                            <option value="">Select Bed Type</option>
                            <option value="single" {{ old('bed_type', $room->bed_type) == 'single' ? 'selected' : '' }}>Single Bed</option>
                            <option value="double" {{ old('bed_type', $room->bed_type) == 'double' ? 'selected' : '' }}>Double Bed</option>
                            <option value="queen" {{ old('bed_type', $room->bed_type) == 'queen' ? 'selected' : '' }}>Queen Bed</option>
                            <option value="king" {{ old('bed_type', $room->bed_type) == 'king' ? 'selected' : '' }}>King Bed</option>
                            <option value="twin" {{ old('bed_type', $room->bed_type) == 'twin' ? 'selected' : '' }}>Twin Beds</option>
                        </select>
                    </div>
                    @error('bed_type')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <!-- Room Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">
                    <i class="fa fa-camera me-1"></i> 
                    @if($room->image) 
                        Change Room Image 
                    @else 
                        Room Image 
                    @endif
                </label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="fa fa-picture-o text-primary"></i></span>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                           id="image" name="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/webp">
                </div>
                <div class="form-text">
                    <i class="fa fa-info-circle me-1"></i>Supported formats: JPG, PNG, GIF, WEBP. Max file size: 5MB
                </div>
                @error('image')
                    <div class="text-danger small mt-1">
                        <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                    </div>
                @enderror
                
                <!-- New Image Preview -->
                <div class="mt-3 d-none" id="imagePreview">
                    <label class="form-label text-success">
                        <i class="fa fa-eye me-1"></i>New Image Preview
                    </label>
                    <div class="border rounded p-3 bg-light">
                        <img id="preview" class="img-thumbnail" style="max-height: 200px; display: none;">
                        <div class="mt-2">
                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeImage()">
                                <i class="fa fa-times me-1"></i> Remove New Image
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">
                    <i class="fa fa-file-text me-1"></i> Description
                </label>
                <div class="input-group">
                    <span class="input-group-text bg-light align-items-start pt-2"><i class="fa fa-pencil text-primary"></i></span>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" name="description" rows="4" 
                              placeholder="Enter room description, features, special amenities, etc.">{{ old('description', $room->description) }}</textarea>
                </div>
                <div class="form-text">
                    <i class="fa fa-info-circle me-1"></i>Describe the room's features, view, and special characteristics
                </div>
                @error('description')
                    <div class="text-danger small mt-1">
                        <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row">
                <!-- Amenities -->
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">
                        <i class="fa fa-wifi me-1"></i> Room Amenities
                    </label>
                    <div class="border rounded p-3 bg-light">
                        @php
                            $currentAmenities = $room->amenities ? json_decode($room->amenities, true) : [];
                            $oldAmenities = old('amenities', $currentAmenities);
                        @endphp
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="wifi" name="amenities[]" value="wifi" {{ in_array('wifi', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="wifi">
                                        <i class="fa fa-wifi text-primary me-1"></i> WiFi
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="tv" name="amenities[]" value="tv" {{ in_array('tv', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="tv">
                                        <i class="fa fa-television text-info me-1"></i> TV
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac" name="amenities[]" value="ac" {{ in_array('ac', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ac">
                                        <i class="fa fa-snowflake-o text-success me-1"></i> Air Conditioning
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="heating" name="amenities[]" value="heating" {{ in_array('heating', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="heating">
                                        <i class="fa fa-fire text-warning me-1"></i> Heating
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="minibar" name="amenities[]" value="minibar" {{ in_array('minibar', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="minibar">
                                        <i class="fa fa-glass text-muted me-1"></i> Minibar
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="safe" name="amenities[]" value="safe" {{ in_array('safe', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="safe">
                                        <i class="fa fa-lock text-dark me-1"></i> Safe
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="balcony" name="amenities[]" value="balcony" {{ in_array('balcony', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="balcony">
                                        <i class="fa fa-building text-info me-1"></i> Balcony
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="view" name="amenities[]" value="view" {{ in_array('view', $oldAmenities) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="view">
                                        <i class="fa fa-binoculars text-success me-1"></i> Sea View
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('amenities')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Status -->
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">
                        <i class="fa fa-info-circle me-1"></i> Room Status <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fa fa-flag text-primary"></i></span>
                        <select class="form-select @error('status') is-invalid @enderror" 
                                id="status" name="status" required>
                            <option value="available" {{ old('status', $room->status) == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="occupied" {{ old('status', $room->status) == 'occupied' ? 'selected' : '' }}>Occupied</option>
                            <option value="maintenance" {{ old('status', $room->status) == 'maintenance' ? 'selected' : '' }}>Under Maintenance</option>
                            <option value="cleaning" {{ old('status', $room->status) == 'cleaning' ? 'selected' : '' }}>Cleaning in Progress</option>
                        </select>
                    </div>
                    @error('status')
                        <div class="text-danger small mt-1">
                            <i class="fa fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <!-- Form Buttons -->
            <div class="d-flex gap-2 justify-content-end mt-4 pt-3 border-top">
                <a href="{{ route('rooms.index') }}" class="btn btn-outline-secondary">
                    <i class="fa fa-arrow-left me-1"></i> Back to Rooms
                </a>
                <button type="reset" class="btn btn-outline-warning" onclick="resetForm()">
                    <i class="fa fa-undo me-1"></i> Reset Changes
                </button>
                <button type="submit" class="btn btn-primary px-4">
                    <i class="fa fa-save me-1"></i> Update Room
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Image preview functionality
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const preview = document.getElementById('preview');
    const imagePreview = document.getElementById('imagePreview');
    
    if (file) {
        // Validate file size (5MB)
        if (file.size > 5 * 1024 * 1024) {
            alert('File size must be less than 5MB');
            this.value = '';
            return;
        }
        
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            imagePreview.classList.remove('d-none');
        }
        
        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
        imagePreview.classList.add('d-none');
    }
});

function removeImage() {
    document.getElementById('image').value = '';
    document.getElementById('preview').style.display = 'none';
    document.getElementById('imagePreview').classList.add('d-none');
}

function resetForm() {
    // Reset image preview for new image
    removeImage();
    
    // Show confirmation
    setTimeout(() => {
        if (confirm('Are you sure you want to reset all changes?')) {
            document.getElementById('editRoomForm').reset();
        }
    }, 100);
}

// Form submission handler
document.getElementById('editRoomForm').addEventListener('submit', function(e) {
    const price = document.getElementById('price').value;
    if (price && parseFloat(price) > 99999.99) {
        e.preventDefault();
        alert('Price cannot exceed $99,999.99');
        return false;
    }
});
</script>

<style>
.form-label {
    font-weight: 500;
    margin-bottom: 0.5rem;
}
.input-group-text {
    min-width: 45px;
    justify-content: center;
}
.current-image-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.form-check-label {
    cursor: pointer;
    transition: color 0.2s;
}
.form-check-label:hover {
    color: #495057;
}
</style>
@endsection