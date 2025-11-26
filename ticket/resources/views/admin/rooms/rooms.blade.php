@extends('layouts.admin')
@section('title','All Rooms')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            <i class="fa fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif
@endsection