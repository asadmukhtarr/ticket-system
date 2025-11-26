<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\room;

class roomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.rooms.rooms');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $request->validate([
                // Room Information
                'room_number' => 'required|string|max:10|unique:rooms,room_number',
                'room_type' => 'required|string|in:single,double,twin,suite,deluxe,executive,presidential',
                'floor' => 'required|integer|min:1|max:50',
                'capacity' => 'required|integer|min:1|max:10',
                'price_per_night' => 'required|numeric|min:0|max:99999.99',
                
                // Room Details
                'room_size' => 'nullable|integer|min:0|max:5000',
                'bed_type' => 'nullable|string|in:single,double,queen,king,twin',
                'description' => 'nullable|string|max:1000',
                
                // Status
                'status' => 'required|string|in:available,occupied,maintenance,cleaning',
                
                // Image
                'image' => 'required|nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // 5MB
                
                // Amenities (array validation)
                'amenities' => 'nullable|array',
                'amenities.*' => 'string|in:wifi,tv,ac,heating,minibar,safe,balcony,view'
            ], [
                // Custom error messages
                'room_number.required' => 'Room number is required',
                'room_number.unique' => 'This room number already exists',
                'room_type.required' => 'Please select a room type',
                'floor.required' => 'Floor number is required',
                'capacity.required' => 'Please specify room capacity',
                'price_per_night.required' => 'Price per night is required',
                'status.required' => 'Please select room status',
                'image.image' => 'The file must be an image',
                'image.mimes' => 'Supported formats: JPEG, PNG, JPG, GIF, WEBP',
                'image.max' => 'Image size should not exceed 5MB',
                'image.required' => 'upload image please'
            ]);
        $imagePath = "";
        if($request->hasFile('image')){
           $imageName = time().'.'.$request->image->getClientOriginalExtension(); 
           $request->image->storeAs('rooms',$imageName,'public');
           $imagePath = "rooms/".$imageName;
        }
        $room = new room;
        $room->room_number = $request->room_number;
        $room->room_type = $request->room_type;
        $room->floor = $request->floor;
        $room->capacity = $request->capacity;
        $room->price_per_night = $request->price_per_night;
        $room->room_size = $request->room_size;
        $room->bed_type = $request->bed_type;
        $room->description = $request->description;
        $room->status = $request->status;
        $room->image = $imagePath;
        $room->amenities = $request->amenities ? json_encode($request->amenities) : null;
        $room->save();
        return redirect(route('rooms.index'))->with('success','Room Created Succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
