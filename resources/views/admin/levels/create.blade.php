@extends('admin.layouts.app')

@section('content')
    <div class="container p-8">

        <div class="card p-3">

            <form action="{{ route('level.store')}}" method="POST">
                @csrf


                <div class="card">

                    <div class="card-header">

                        <div class="form-group">
                            <label for="level">Level Name</label>
                            <input type="text" value="{{old('level') }}" name="level" class="form-control">
                          </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <label for="ratings">Rating</label>
                            <input type="number" class="form-control" value="{{ old('rating')}}" name="rating">
                        </div>
                        <div class="form-group">

                            <label for="ratings">Commision</label>
                            <input type="number" class="form-control" value="{{ old('commision')}}" name="commision">
                        </div>

                        <div class="form-group">

                            <label for="ratings">Dollar Per Minute</label>
                            <input type="number" class="form-control" value="{{ old('pay_per_minute')}}" name="pay_per_minute">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary">Add</button>

                    </div>
                </div>



            </form>

        </div>
    </div>

@endsection
