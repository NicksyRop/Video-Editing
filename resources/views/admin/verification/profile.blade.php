@extends('admin.layouts.app')

@section('content')

<div class="container px-10 py-3">
    <div class="row mt-3">

        <div class="col-md-10 ml-5 mt-5">

            <div class="card align-items-center">

                    <img src=" {{ asset($freelancer->avatar) }}" height="150px" width="150px" style="border-radius:50%" alt="">
                    <div class="card-block text-center">
                        <h4 class="card-title"><b>User information</b> </h4>
                        <p class="card-text"> {{$freelancer->name}}</p>
                        <p class="card-text"> {{$freelancer->email}}</p>
                        <p class="card-text"> {{$freelancer->country}}</p>

                </div>
                <div class="card-footer">


                </div>
            </div>
        </div>


        <div class="col-md-10 ml-5">

            <div class="card">
                <div class="card-header">
                    Documents
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Type </th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Tax</td>
                            <td> <a href="{{ route('tax',$freelancer->id)}}" class="btn btn-primary">view</a></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Curriculum vitae</td>
                            <td> <a href="{{ route('cv',$freelancer->id)}}" class="btn btn-primary">view</a></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>


        </div>

        <div class="col-md-10 ml-5">

            <div class="card">

                <div class="card-header">
                    <p>Driving license</p>

                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">

                            <img src="{{ asset('files/'.$freelancer->profile->front_image) }}" height="200px" width="350px" alt="Front image">
                        </div>
                        <div class="col-md-6">

                            <img src="{{ asset('files/'.$freelancer->profile->back_image) }}" height="200px" width="350px" alt="Back image">
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <p> <b>No :</b> 34096442</p>
                </div>
            </div>
        </div>

        <div class="col-md-10 ml-5">
            <h3>Freelancer Test</h3>

            <div class="card">

                <div class="card-header">
                    <h6>{{$test->title}}</h6>
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
                    <div class="px-3">
                        <form action="{{ route('admin.approve.profile',$freelancer->id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="1" name="verified">
                            <button class="btn btn-primary">Approve</button>
                        </form>
                    </div>
                    <div>

                        <form action="{{ route('admin.approve.profile',$freelancer->id)}}" method="POST">
                            @csrf

                            <input type="hidden" value="0" name="verified">
                            <button class="btn btn-primary">Reject</button>
                        </form>
                    </div>

                </div>




            </div>
        </div>
    </div>



</div>








@endsection
