@extends('admin.layouts.app')

@section('content')

<div class="container  p-3">
    @if ($clients->count() > 0)

    <div class="card p-3">


        <table class="table mt-5" id="datatable">
        <thead>
            <tr>

                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Avatar</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>

                <td> {{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td> <img src="{{ asset($client->avatar) }}" alt="" height="40px" width="40" style="border-radius: 50%"></td>
                {{-- <td> <a href="{{ route('freelancers.show',$client->id) }}" class="btn btn-primary">View</a></td> --}}

            </tr>
            @endforeach


        </tbody>

        </table>

</div>


@else


<div class="jumbotron m-5">
<p class="text-center"> {{  Spatie\Emoji\Emoji::TiredFace()}}</p>

<p class="text-yellow-500 text-2xl text-center font-normal">No Clients at the moment</p>


</div>


@endif

</div>






@endsection
@section('data-tabels-scripts')

<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" defer></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#datatable').DataTable();
});
</script>

@endsection
@section('datat-tables-styles')

<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

@endsection
