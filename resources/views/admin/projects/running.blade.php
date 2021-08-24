@extends('admin.layouts.app')

@section('content')
<div class="container  p-8">

    @if ($projects->count() > 0 )

            <div class="card p-3">
                <table class="table mt-3" id="datatable">
                    <thead>
                        <tr>
                            <th>Job iD</th>
                            <th>Client Username</th>
                            <th>Time Posted</th>
                            <th>Duration</th>
                            <th>Freelancer</th>
                            <th>Dollars</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ \App\Models\User::where('id',$project->user_id)->first()->name}}</td>
                            <td> {{ $project->created_at->diffForHumans()}}</td>
                            <td>{{$project->duration}}</td>
                            <td> {{ \App\Models\User::where('id',$project->freelancer_id)->first()->name}} </td>
                            <td>{{ $project->freelancer_pay}}</td>

                            <td><a href="" class="btn btn-success">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>


    @else


    <div class="jumbotron">
        <p class="text-center mt-5"> {{  Spatie\Emoji\Emoji::TiredFace()}}</p>

        <h4 class="text-yellow-500 text-2xl text-center font-normal">No running projects at the moment</h4>


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
