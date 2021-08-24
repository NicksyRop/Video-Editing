@extends('admin.layouts.app')

@section('content')


        <div class="row">


            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">
                        <h1>{{$test->title}}</h1>
                    </div>

                    <div class="card-body">

                         <h3>Resources</h3>


                                <p>
                                    {{$test->file}}
                                </p>

                    </div>


                    <hr>
                    <div class="card-body">
                        <p>
                            {!! $test->instructions !!}

                        </p>

                    </div>
                </div>


            </div>
        </div>


    <div class="col-md-10 ml-5">

        <div class="card">
            <div class="card-header">
                Freelancer Response
            </div>

            <div class="card-body">
                <a href="{{route('test',$usertest->id)}}" class="btn btn-primary">View</a>
            </div>
        </div>


    </div>
    <div class="col-md-10 ml-5">

        <div class="card">
            <div class="card-header">
                Admin Verification
            </div>
            <div class="card-footer">

                <div class="d-flex justify-content-between">
                    <div>
                        <form action="{{ route('admin.approve.test',$usertest->user_id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="1" name="test_status">
                            <button class="btn btn-primary">Approve</button>
                        </form>
                    </div>
                    <div>

                        <form action="{{ route('reject',$user->id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="1" name="status">
                            <button class="btn btn-primary">Reject</button>
                        </form>
                    </div>

                </div>




            </div>
        </div>
    </div>



@endsection
