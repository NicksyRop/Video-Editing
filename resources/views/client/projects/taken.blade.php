@extends('frontend.default.layouts.app')
@section('content')
<div class="container">



        @if ($takens->count() > 0))


        @foreach ($takens as $taken)
        <div class="card card-default">

            <div class="card-header">
                <h4> {{$taken->title}}</h4>

            </div>

            <div class="card-body">

                <h4 class="my-2">Instruction</h4>

                <p class="my-2"> {!! $taken->instructions !!}</p>

                <div>
                    <b>Freelancer</b> : {{App\Models\User::find($taken->freelancer_id)->name}}

                </div>


                <b>Posted </b> {{ $taken->created_at->diffForHumans() }}

            </div>
        </div>

        @endforeach


        @else


        <div class="py-10 rounded-md shadow-lg my-40">

            <div class="flex-col">

                <div>

                        <p class="text-4xl text-center text-yellow-600"> {{  Spatie\Emoji\Emoji::TiredFace()}}</p>

                </div>

            <div>


            </div>

                <p class="text-yellow-500 text-2xl text-center font-normal">There are no Taken Projects at the moment</p>

            </div>

            </div>

        @endif






    </div>

</div>

@endsection
