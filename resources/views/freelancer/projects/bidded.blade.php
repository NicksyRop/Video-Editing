@extends('frontend.default.layouts.app')
@section('content')
<div class="container">
    <div class="col-md-10 ml-5">

        @if ($projects->count() > 0)
                        @foreach ($projects as $project)
                            <div class="card card-default mt-2">

                                <div class="card-header">
                                    <h4> {{$project->title}}</h4>

                                </div>

                                <div class="card-body">

                                    <h4 class="my-2">Instructions</h4>

                                    <p class="my-2"> {!! $project->instructions !!}</p>

                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div> <h6><strong>Status :</strong>
                                        Active</h6></div>
                                        <div> <h6><strong>Client :</strong>{{App\Models\User::find($project->user_id)->name}}</h6></div>
                                        <div> <h6><strong>  Dollars : </strong>{{ $project->freelancer_pay}}</h6></div>
                                    </div>
                                    <hr>

                                    <p>Posted : {{ $project->created_at->diffForHumans() }}</p>

                                    <p> Freelancer Level : <button class="btn btn-success">{{ App\Models\Level::where('id',Auth::user()->profile->level_id)->first()->level}}</button></p>
                                    <form id="cancel-form" action="{{ route('cancel',$project->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <button class="btn btn-danger">Cancel Project</button>

                                    </form>

                                    <hr>
                                    <div class="py-3">
                                        <h4>Submit Task</h4>

                                        <p id="demo" style="color: red; font-size : 30px"></p>


                                        <form action="{{route('project.submit',$project->id)}}" method="post" enctype="multipart/form-data">

                                            @csrf

                                            <div class="form-group">

                                                <label for="File">Upload File</label>
                                                <input type="file" name="file" id="" class="form-control">
                                                @error('file') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
                                            </div>


                                            <Button  type="submit" class="btn btn-primary">Submit</Button>

                                        </form>


                                    </div>



                                </div>
                            </div>
                            <script>

                                var countDownDate = new Date("{{$project->end_time}}").getTime();


                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                  var now = new Date();
                                  var distance = countDownDate - now;





                                  // Time calculations for hours, minutes and seconds
                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                  // Display the result in the element with id="demo"
                                  document.getElementById("demo").innerHTML =  hours + "h "
                                  + minutes + "m " + seconds + "s ";

                                  // If the count down is finished, write some text
                                  if (distance < 0) {
                                    clearInterval(x);

                                    document.getElementById("cancel-form").submit();
                                  //  window.location.href = "{{ route('projects')}}";

                                   // document.getElementById("demo").innerHTML = "EXPIRED";
                                  }
                                }, 1000);
                                </script>

                        @endforeach
                        <hr>

            @else






          <div class="jumbotron p-5 mt-5" >

              <h4 class="text-center">You have no bidded projects {{ Spatie\Emoji\Emoji::TiredFace()}}</h4>

           </div>


        @endif






    </div>

</div>

@endsection

@section('countdown')



@endsection
