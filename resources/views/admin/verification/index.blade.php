@extends('admin.layouts.app')

@section('content')
<div class="container p-5">

    @if ($newcomers->count() > 0)

    <div class="row ml-2">
        <table class="table mt-5 ml-5">
         <thead>
           <tr>
             <th scope="col">User Id</th>
             <th scope="col">Username</th>
             <th scope="col">Email</th>
             <th scope="col">Image</th>
             <th scope="col">Verify</th>

           </tr>
         </thead>

         @foreach ($newcomers as $freelancer)
         <tbody>

          <tr>
              <th scope="row"> {{$freelancer->id }}</th>
              <td> {{ $freelancer->name }}</td>
              <td>{{ $freelancer->email }}</td>
              <td> <img src="{{ asset($freelancer->avatar) }}" alt="" height="40px" width="40" style="border-radius: 50%"></td>

              <td>
                @if ($freelancer->verified == 1)
                <button class="btn btn-success disabled">Verified</button>
                @else
                <a href="{{ route('profile.verification',$freelancer->id) }}" class="btn btn-primary">View</a>
                @endif
              </td>

          </tr>

       </tbody>
         @endforeach


        </table>
    </div>


    @else

    <div class="jumbotron">
        <p class="text-center mt-5"> {{  Spatie\Emoji\Emoji::TiredFace()}}</p>

        <h4 class="text-yellow-500 text-2xl text-center font-normal">No new Freelancers at the moment</h4>


    </div>


    @endif



</div>




@endsection
