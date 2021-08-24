@extends('admin.layouts.app')

@section('content')

    <div class="container px-10 py-5">

         <video controls  height="500px" width="1000px" autoplay src="{{ asset($test->file)}}"></video>

    </div>


@endsection


