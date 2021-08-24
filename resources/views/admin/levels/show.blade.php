@extends('admin.layouts.app')

@section('content')

<div class="container p-8">
    <div class="card p-3">

        <div class="card">
            <div class="card-header">
               <h2>{{ $level1->level }}</h2>
            </div>

            <div class="card-body">

                <p> <strong><span>Rating : </span></strong>{{  $level1->rating }}</p>
                <hr>
                <p> <strong><span>Commission : </span></strong>{{  $level1->commision }}</p>

                <p> <strong><span>Dollars per minute : </span></strong>{{  $level1->pay_per_minute }}</p>
            </div>

            <div class="card-footer">
                <a href="{{ route('level.edit',$level1->id) }} " class="btn btn-primary" >Edit</a>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>

                <div class="modal" id="delete" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Delete Level</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Are you sure you want to delete this Level?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                          <form action="{{ route('level.destroy',$level1->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary">Yes</button>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

        </div>



    </div>



</div>






@endsection


