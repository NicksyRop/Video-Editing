@extends('frontend.default.layouts.app')
@section('content')
    <div class="container py-2">
        <h2 class="my-5 text-center">Lets Gauge your skills , Complete this task</h2>
        <div class="row">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header">
                        <h1>{{$test1->title}}</h1>
                    </div>

                    <div class="card-body">

                         <h3>Resources</h3>

                            <a href="{{ route('freelancer.download',$test1->id) }}">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg> <h3>Download</h3>

                             </a>

                    </div>


                    <hr>
                    <div class="card-body">
                        <p>
                            {!! $test1->instructions !!}

                        </p>

                    </div>
                </div>

            </div>

            <div class="col-md-10 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Response</h4>
                    </div>
                   <div class="card-body">

                    <form action="{{ route('test.submit',)}}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">

                            <label for="File">File</label>
                            <input type="file" name="file" id="" class="form-control">
                            @error('file') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
                        </div>
                        <input type="hidden" name="user_id" id="" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="test_id" value="{{$test1->id}}">

                        <Button  type="submit" class="btn btn-primary">Submit</Button>

                    </form>
                </div>

                </div>

            </div>





        </div>

    </div>

@endsection
