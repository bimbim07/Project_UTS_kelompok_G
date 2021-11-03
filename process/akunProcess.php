@extends('dashboard')

@section('content')

    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Account</h2>
        </div>
        <div>
            <a class="btn btn-secondary" href="{{ route('index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>user ID:</strong>
                {{ $users->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Name:</strong>
                {{ $users->name}} 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student's Email:</strong>
                {{ $users->email }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student's Phone Number:</strong>
                {{ $users->no_telp }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student's Birthplace:</strong>
                {{ $users->tempat_lahir }}
            </div>
        </div>

        
    </div>
@endsection