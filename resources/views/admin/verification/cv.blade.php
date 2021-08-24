@extends('admin.layouts.app')

@section('content')

    <div class="container px-10 py-3">
       <object data="{{ asset($user->profile->cv)}}" width="900" height="600" class="ml-5">
        <!--<iframe src="{{ asset($user->profile->cv)}}" height="400px" width="600px" frameborder="0" ></iframe>-->
    </div>


@endsection



