@extends('admin.layouts.app')

@section('content')
<div class="container p-8">

    <a href="{{ route('tests.create')}}" class="btn btn-primary">Add Tests</a>
    <div class="card p-3">

        @foreach ($tests as $test)
        <div class="card">

            <div class="card-header">
                <h1>{{ $test->title }}</h1>
            </div>

            <div class="card-body">
                <h3>Description</h3>
                <p>Dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also</p>

            </div>

            <div class="card-footer">
                <a href="{{ route('tests.show', $test->id) }} " class="btn btn-primary btn-sm">View</a>
            </div>
        </div>
        @endforeach


    </div>
</div>




@endsection
