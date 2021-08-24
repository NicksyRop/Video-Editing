@extends('admin.layouts.app')

@section('content')
<div class="container  p-8">

    <div class="card p-3">

        <table class="table mt-5" id="datatable">
            <thead>
                <tr>
                    <th>Job iD</th>
                    <th>Client Username</th>
                    <th>Time Posted</th>
                    <th>Duration</th>
                    <th>Payment Status</th>
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
                    <td>
                        @if ($project->paid == 1)

                        Paid

                        @else

                         Not Paid

                        @endif
                    </td>

                    <td><a href="" class="btn btn-success">View</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>



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
