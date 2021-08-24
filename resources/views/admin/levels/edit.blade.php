@extends('admin.layouts.app')

@section('content')
<div class="container p-8">
    <div class="card p3">
        <div class="card">
            <form action="{{ route('level.update',$rate->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="card">

                    <div class="card-header">

                        <div class="form-group">
                            <label for="level">Level</label>
                            <input type="text" value="{{ $rate->level }}" name="level" class="form-control">
                          </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <label for="ratings">Rating</label>
                            <input type="text" class="form-control" value="{{ $rate->rating }}" name="rating">
                        </div>
                        <div class="form-group">

                            <label for="ratings">Commision</label>
                            <input type="text" class="form-control" value="{{ $rate->commision }}" name="commision">
                        </div>

                        <div class="form-group">

                            <label for="ratings">Dollar Per Minute</label>
                            <input type="text" class="form-control" value="{{ $rate->pay_per_minute }}" name="pay_per_minute">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary">Edit</button>

                    </div>
                </div>



            </form>
        </div>



    </div>


</div>









@endsection
