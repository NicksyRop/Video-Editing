@extends('frontend.default.layouts.app')
@section('content')
<div class="container">

    <div class="bg-gray-100 rounded-xl p-5 table-responsive">
        <div class="align-items-end p-3">
            <a href="{{ route('project.create')}}" class="btn btn-info ">Post Project</a>

        </div>
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th>Job iD</th>
                                <th>Client</th>
                                <th>Time Posted</th>
                                <th>Amount</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($completed as $complete)
                            <tr>
                                <td>{{ $complete->id }}</td>
                                <td>{{ \App\Models\User::where('id',$complete->user_id)->first()->name}}</td>
                                <td> {{ $complete->created_at->diffForHumans()}}</td>
                                <td>{{$complete->freelancer_pay}}</td>
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
