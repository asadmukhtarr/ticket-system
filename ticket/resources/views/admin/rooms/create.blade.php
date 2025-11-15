@extends('layouts.admin')
@section('title','Create New Room')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="card-title mb-0">
            <i class="fa fa-plus-circle"></i> Add New Room
        </h5>
    </div>
    <div class="card-body">
        <form id="addRoomForm" enctype="multipart/form-data">
            <div class="row">
                <!-- Room Number -->
                <div class="col-md-6 mb-3">
                    <label for="roomNumber" class="form-label">
                        <i class="fa fa-hashtag"></i> Room Number <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-building"></i></span>
                        <input type="text" class="form-control" id="roomNumber" name="room_number" placeholder="e.g., 101" required>
                    </div>
                </div>

                <!-- Room Type -->
                <div class="col-md-6 mb-3">
                    <label for="roomType" class="form-label">
                        <i class="fa fa-bed"></i> Room Type <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-list"></i></span>
                        <select class="form-select" id="roomType" name="room_type" required>
                            <option value="">Select Room Type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="twin">Twin</option>
                            <option value="suite">Suite</option>
                            <option value="deluxe">Deluxe</option>
                            <option value="executive">Executive</option>
                            <option value="presidential">Presidential</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Floor -->
                <div class="col-md-4 mb-3">
                    <label for="floor" class="form-label">
                        <i class="fa fa-building-o"></i> Floor <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-level-up"></i></span>
                        <input type="number" class="form-control" id="floor" name="floor" min="1" max="50" placeholder="Floor number" required>
                    </div>
                </div>

                <!-- Capacity -->
                <div class="col-md-4 mb-3">
                    <label for="capacity" class="form-label">
                        <i class="fa fa-users"></i> Capacity <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-male"></i></span>
                        <input type="number" class="form-control" id="capacity" name="capacity" min="1" max="10" placeholder="Guests" required>
                    </div>
                </div>

                <!-- Price Per Night -->
                <div class="col-md-4 mb-3">
                    <label for="price" class="form-label">
                        <i class="fa fa-money"></i> Price Per Night ($) <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-usd"></i></span>
                        <input type="number" class="form-control" id="price" name="price_per_night" step="0.01" min="0" placeholder="0.00" required>
                    </div>
                </div>
            </div>

            <!-- Room Image -->
            <div class="mb-3">
                <label for="image" class="form-label">
                    <i class="fa fa-camera"></i> Room Image
                </label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-picture-o"></i></span>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                </div>
                <div class="form-text">
                    Supported formats: JPG, PNG, GIF, WEBP. Max file size: 5MB
                </div>
                <!-- Image Preview -->
                <div class="mt-2 d-none" id="imagePreview">
                    <img id="preview" class="img-thumbnail" style="max-height: 200px; display: none;">
                    <button type="button" class="btn btn-sm btn-outline-danger mt-1" onclick="removeImage()">
                        <i class="fa fa-times"></i> Remove Image
                    </button>
                </div>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">
                    <i class="fa fa-file-text"></i> Description
                </label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter room description, features, etc."></textarea>
                </div>
            </div>

            <div class="row">
                <!-- Amenities -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        <i class="fa fa-wifi"></i> Amenities
                    </label>
                    <div class="border rounded p-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="wifi" name="amenities[]" value="wifi">
                                    <label class="form-check-label" for="wifi">
                                        <i class="fa fa-wifi text-primary"></i> WiFi
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="tv" name="amenities[]" value="tv">
                                    <label class="form-check-label" for="tv">
                                        <i class="fa fa-television text-info"></i> TV
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac" name="amenities[]" value="ac">
                                    <label class="form-check-label" for="ac">
                                        <i class="fa fa-snowflake-o text-success"></i> Air Conditioning
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="heating" name="amenities[]" value="heating">
                                    <label class="form-check-label" for="heating">
                                        <i class="fa fa-fire text-warning"></i> Heating
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="minibar" name="amenities[]" value="minibar">
                                    <label class="form-check-label" for="minibar">
                                        <i class="fa fa-glass text-muted"></i> Minibar
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="safe" name="amenities[]" value="safe">
                                    <label class="form-check-label" for="safe">
                                        <i class="fa fa-lock text-dark"></i> Safe
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="balcony" name="amenities[]" value="balcony">
                                    <label class="form-check-label" for="balcony">
                                        <i class="fa fa-building text-info"></i> Balcony
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="view" name="amenities[]" value="view">
                                    <label class="form-check-label" for="view">
                                        <i class="fa fa-binoculars text-success"></i> Sea View
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status -->
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">
                        <i class="fa fa-info-circle"></i> Status <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-flag"></i></span>
                        <select class="form-select" id="status" name="status" required>
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                            <option value="maintenance">Maintenance</option>
                            <option value="cleaning">Cleaning</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Room Size & Bed Type -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="roomSize" class="form-label">
                        <i class="fa fa-arrows"></i> Room Size (sq ft)
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-expand"></i></span>
                        <input type="number" class="form-control" id="roomSize" name="room_size" min="0" placeholder="e.g., 350">
                    </div>
                </div>
                
                <!-- Bed Type -->
                <div class="col-md-6 mb-3">
                    <label for="bedType" class="form-label">
                        <i class="fa fa-bed"></i> Bed Type
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-moon-o"></i></span>
                        <select class="form-select" id="bedType" name="bed_type">
                            <option value="">Select Bed Type</option>
                            <option value="single">Single Bed</option>
                            <option value="double">Double Bed</option>
                            <option value="queen">Queen Bed</option>
                            <option value="king">King Bed</option>
                            <option value="twin">Twin Beds</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Form Buttons -->
            <div class="d-flex gap-2 justify-content-end mt-4">
                <button type="reset" class="btn btn-secondary" onclick="resetImagePreview()">
                    <i class="fa fa-eraser"></i> Clear
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> Add Room
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

function resetImagePreview() {
    // This will be called when the form reset button is clicked
    setTimeout(() => {
        document.getElementById('preview').style.display = 'none';
        document.getElementById('imagePreview').classList.add('d-none');
    }, 100);
}
</script>
@endsection