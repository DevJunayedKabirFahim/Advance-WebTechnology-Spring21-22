@extends('layouts.app')
@section('content')
<h3>Login Here</h3>
<br>
<form action="{{route('login')}}" class="form-group" method="post">
    {{csrf_field()}}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <br><br>
    <input type="submit" class="btn btn-success" value="Log In" >
    <a style="text-decoration: none;" href="#" class="link-primary">Can't access your account? Click here.</a>

    
</form>
@endsection