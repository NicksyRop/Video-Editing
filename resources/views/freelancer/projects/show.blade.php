@extends('frontend.default.layouts.app')
@section('content' )
<div class="container">
    <div class="col-md-10 p2">
        <div class="card mt-3">

            <div class="card-header">
                <h4>{{ $project->title}}</h4>
            </div>

            <div class="card-body">

                <h6>Resources</h6>
                <p>
                   <a href="{{route('resource.download',$project->id)}}" class="btn btn-success"><i class="fa fa-download" aria-hidden="true" ></i>Download</a>
                </p>
            </div>

            <hr>
            <div class="card-body">
                <p>
                   {!! $project->instructions !!}

                </p>
                <hr>

              <h6> <b> Posted :</b> {{ $project->created_at->diffForHumans() }}</h6>
              <h6> <b>Freelancer Level :</b>{{ App\Models\Level::where('id',Auth::user()->profile->level_id)->first()->level}}</h6>

                <form action="{{ route('take',$project->id)}}" method="POST" class="py-2">
                    @csrf
                    <input type="hidden" name="id" value="{{ Auth::user()->id}}">
                    <button class="btn btn-primary">Take</button>
                </form>

            </div>


        </div>


    </div>

</div>


@endsection

