@extends('layouts.app')
@section('content')
<br><br>
<div class="text-secondary">
    <h5>Contact with us</h5>
</div>

<form action="{{route('contact')}}" class="form-group" method="post"">
    {{csrf_field()}}
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Your Personal Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Subject</span>
        <input type="text" name="subject" value="{{old('subject')}}" class="form-control">
        @error('subject')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <br>
    <div class="col-md-4 form-group">
        <span>Your Message</span>
        <textarea name="message" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('message')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <br>
    <input type="submit" class="btn btn-success" value="Send" >
@endsection