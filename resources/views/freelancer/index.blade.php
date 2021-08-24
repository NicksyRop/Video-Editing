@extends('frontend.default.layouts.app')
@section('content')

<div class="container">
<h5 class="my-5">Welcome to Editys</h5>

    @if (Auth::user()->status)
    <div class="div my-5">
        <h4 class="alert alert-info text-center" > {{ Auth::user()->name }} we are sorry your profile did not match our creteria</h4>

    </div>

    @else
    <div class="div my-5">
        <h4 class="alert alert-info text-center" > {{ Auth::user()->name }} Your Profile is under review </h4>

    </div>

    @endif



</div>



@endsection
