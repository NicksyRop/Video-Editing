@extends('admin.layouts.app')

@section('content')
<div class="container  p-5">

    <div class="card-body">

        @if ($ratings->count() >0)
        <table class="table aiz-table mb-0">
            <thead>
                <tr>

                    <th>Freelancer</th>
                    <th>Client</th>
                    <th>Project Id</th>
                    <th>Rating</th>
                    <th>Comment</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($ratings as $rating)

                    <td>{{ \App\Models\User::where('id',$rating->freelancer_id)->first()->name}}</td>
                    <td>{{ \App\Models\User::where('id',$rating->user_id)->first()->name}}</td>
                    <td>{{$rating->project_id }}</td>
                    <td>{{$rating->rate}}</td>
                    <td>{{$rating->comment}}</td>
                    <td></td>

                @endforeach


            </tbody>
        </table>

        @else


            <div class="jumbotron m-5">
            <p class="text-center"> {{  Spatie\Emoji\Emoji::TiredFace()}}</p>

            <p class="text-yellow-500 text-2xl text-center font-normal">No Freelancer Review at the moment</p>


            </div>
        @endif

        <div class="aiz-pagination aiz-pagination-center">

        </div>
    </div>

</div>
@endsection
