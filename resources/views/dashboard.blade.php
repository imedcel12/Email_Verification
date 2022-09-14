@extends('base')

@section('content')

<div class="container col-md-6 offset-md-3 mt-5">
    <h1>Welcome to Dashboard</h1>
    <a href="{{'/logout'}}"><button class="btn btn-primary mt-3"> Logout</button></a>
</div>

@endsection
