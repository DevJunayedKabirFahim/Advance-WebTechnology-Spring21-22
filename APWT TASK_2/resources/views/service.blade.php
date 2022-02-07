@extends('layouts.app')
@section('content')
<h1>We Provide Following Services:  </h1>

<ul>
@foreach($service as $s)
    <li>{{$s}}</li>
@endforeach
</ul>
@endsection