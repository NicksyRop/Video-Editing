@extends('frontend.default.layouts.app')
@section('content')
<div class="container">

        <div class="m-5">
            <video controls controlsList="nodownload" height="500px" width="1000px" autoplay src="{{ asset('responses/'.$response->file)}}"></video>

        </div>

@if (App\Models\Project::where('id',$response->project_id)->first()->approved === null)

            <div class="card card-default col-md-6 items-center">
                <div class="card-footer">
                    <div>
                        <form action="{{ route('project.approve',$response->project_id)}}" method="POST">

                            @csrf
                            <input type="hidden" value="1" name="approved">
                            <input type="hidden" name="amount" value="{{ App\Models\Project::where('id',$response->project_id)->first()->freelancer_pay}}">
                            <input type="hidden" name="user_id" value="{{ App\Models\Project::where('id',$response->project_id)->first()->freelancer_id}}">
                            <input type="hidden" name="project_id" value="{{$response->project_id}}">

                            <button  class="btn btn-primary">Approve</button>
                        </form>
                    </div>
                    <div>

                        <form action="{{ route('project.approve',$response->project_id)}}" method="POST">
                            @csrf

                            <input type="hidden" value="0" name="approved">
                            <button  class="btn btn-primary">Reject</button>
                        </form>
                    </div>


             </div>
 @else
<h4 class="text-center">You already approved this project</h4>


@endif

@if(App\Models\Project::where('id',$response->project_id)->first()->approved == 1)

<a href="{{ route('project.download',$response->file)}}" class="btn btn-success">Download Video</a>

@endif

@if (App\Models\Project::where('id',$response->project_id)->first()->rated == 0)

<div class="col-md-6 p-5">

    <form action="{{ route('rate',$project->id)}}" method="POST">
        @csrf


            <div class="rateyo" id= "rating"
            data-rateyo-rating="4"
            data-rateyo-num-stars="5"
            data-rateyo-score="3">
            </div>

            <span class='result'>4</span>

            <input type="hidden" name="rating">

            <div class="form-group">
                <label for="comment">Leave a comment</label>
                <textarea name="comment" class="form-control" id="" cols="25" rows="2"></textarea>
            </div>


            <button class="btn btn-primary" type="submit">Rate</button>



    </form>
</div>
</div>


@endif






</div>



@endsection

@section('scripts')



@endsection
@section('rateyo-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">


@endsection

@section('rateyo-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>

    jQuery(document).ready(function($){

        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                ratedFill: "#E74C3C"
                $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :'+ rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
    });


    </script>

@endsection
