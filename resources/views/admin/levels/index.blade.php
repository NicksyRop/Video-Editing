@extends('admin.layouts.app')

@section('content')

<div class="container p-8">

    <a href="{{ route('level.create')}}" class="btn btn-success">Add Level</a>

    <div class="card p-3">

        @foreach ($levels as $level)
        <div class="card ml-8">
            <div class="card-header">
               <h2>{{ $level->level }}</h2>
            </div>

            <div class="card-body">

                <p>{{  $level->rating }}</p>
            </div>

            <div class="card-footer">
            <a href="{{ route('level.show',  $level->id ) }}" class="btn btn-primary">View</a>
            </div>
        </div>


        @endforeach
    </div>


</div>



@endsection
