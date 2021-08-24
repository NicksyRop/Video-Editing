@extends('admin.layouts.app')

@section('content')
<div class="page">
    <div class="container p-8">
        <div class="card p-3">
            <div class="card">

                <div class="card-header">
                    <h1>What is Lorem Ipsum?</h1>
                </div>

                <div class="card-body">

                    <h3>Resources</h3>
                    <p>
                        {{$test1->file}}
                    </p>
                </div>

                <hr>
                <div class="card-body">
                    <p>
                        {!! $test1->instructions !!}

                    </p>
                </div>

                <div class="card-footer">

                    <div class="d-flex justify-content-end ml-2" >
                        <a href="{{ route('tests.edit', $test1->id )}} "  class="btn btn-primary ">Edit</a>
                        <a href="{{ route('tests.destroy', $test1->id )}}" class="btn btn-primary ml-2">Delete</a>
                    </div>
                </div>
            </div>


        </div>
    </div>




@endsection
