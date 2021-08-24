@extends('frontend.default.layouts.app')
@section('content')
<div class="container">

    <div class="bg-gray-100 rounded-xl p-5">
        <div class="align-items-end p-3">
            <a href="{{ route('project.create')}}" class="btn btn-info ">Post Project</a>

        </div>
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th>Job iD</th>
                                <th>Client</th>
                                <th>Time Posted</th>
                                <th>Duration</th>
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
                                <td><a href="{{ route('client.show',$project->id)}}"><button class="btn btn-primary  btn-sm">
                                    View
                                  </button></a> </td>
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
