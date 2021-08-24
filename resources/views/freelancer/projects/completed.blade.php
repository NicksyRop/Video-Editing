@extends('frontend.default.layouts.app')
@section('content')
<div class="col-md-10 ml-5">

@if ($projects->count() > 0)

<div class="bg-gray-100 rounded-xl p-3" style="overflow-x:auto;">
    <table class="table" id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Job iD</th>
                <th>Client</th>
                <th>Time Posted</th>
                <th>Duration</th>
                <th>Dollars</th>

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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@else


<div class="jumbotron p-5 mt-5" >

    <h6 class="text-center">You have not completed any recent projects {{ Spatie\Emoji\Emoji::TiredFace()}}</h6>

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
