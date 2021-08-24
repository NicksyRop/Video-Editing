@extends('frontend.default.layouts.app')
@section('content')
<div class="container">

                <div class="bg-gray-100 rounded-xl p-3" style="overflow-x:auto;">
                    <table class="table" id="datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Job iD</th>
                                <th>Client</th>
                                <th>Time Posted</th>
                                <th>Duration</th>
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
                                <td>{{$project->freelancer_pay}}</td>
                                <td> <a href="{{ route('project.resources',$project->id)}}" class="btn btn-primary btn-sm">View</a></td>
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
