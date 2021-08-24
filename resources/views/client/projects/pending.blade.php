@extends('frontend.default.layouts.app')
@section('content')
<div class="container">


        @if ($pendings->count() > 0)

        @foreach ($pendings as $pending)
        <div class="card card-default">

            <div class="card-header">
                <h4> {{$pending->title}}</h4>

            </div>

            <div class="card-body">

                <h4 class="my-2">Instruction</h4>

                <p class="my-2"> {!! $pending->instructions !!}</p>


                Posted : {{ $pending->created_at->diffForHumans() }}
                <div>
                    <a href="{{ route('project.view',$pending->id)}}" class="btn btn-primary">View</a>

                </div>

            </div>
        </div>

        @endforeach

        @else


        <div class="jumbotron p-5 mt-5" >

            <h6 class="text-center">There are no pending projects{{ Spatie\Emoji\Emoji::TiredFace()}}</h6>

         </div>






        @endif




    </div>


@endsection
