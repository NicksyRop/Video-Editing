@extends('layouts.app')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



               
                <div class="alert alert-danger">
                        <div class="card">
                            <div class="card-body">

                              <p> Please complete your profile , <a href="{{ route('profile_create') }}">here</a></p> 
                            
                            </div>
                        </div>
                    </div>
                    

                

                 
                </div>
            </div>
        </div>    

@endsection
