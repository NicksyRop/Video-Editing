@extends('frontend.default.layouts.app')
@section('content')
<div class="container">

              <div class="bg-gray-100 rounded-xl p-5 table-responsive" style="overflow-x:auto;">

                @if ($earnings->count() > 0)

                    <table class="table" id="datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Project iD</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($earnings as $earning)
                            <tr>
                                <td>{{$earning->project_id}}</td>
                                <td>{{ $earning->created_at}} </td>
                                <td> {{ $earning->amount}}</td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                @else


                <div class="jumbotron p-5 mt-5" >

                    <h4 class="text-center">No transaction history {{ Spatie\Emoji\Emoji::TiredFace()}}</h4>

                 </div>


                @endif

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
