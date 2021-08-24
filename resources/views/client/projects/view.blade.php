@extends('frontend.default.layouts.app')
@section('content')
<div class="container">

<div class="card p-3 mt-5">

    <div class="card-header">

        <h5>{{$project->title}}</h5>
    </div>

    <div class="card-body">
        <p>  {{ $project->instructions}}</p>

        <h6> <b>Amount :</b>{{ $project->amount}}</h6>

        <h6><b>Posted  :</b> {{ $project->created_at->diffForHumans()}}</h6>
        <h6> <b>Time :</b>{{ $project->duration}}</h6>

    </div>

    <div class="card-footer">

        <form action="{{route('project.destroy',$project->id) }}" method="POST">

            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete Project</button>

        </form>
    </div>







</div>
</div>
@endsection
