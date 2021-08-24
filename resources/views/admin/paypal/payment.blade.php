@extends('admin.layouts.app')

@section('content')

<div class="container  p-8">

    <div class="card p-3">
        @if ($payments->count() >0)
        <table id="datatable" class="table aiz-table mb-0" >
            <thead>
                <tr>

                    <th>Project Id</th>
                    <th>Client</th>
                    <th>Amount</th>
                    <th>Paypal Id</th>
                    <th>Date</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $pay)

                    <td>{{$pay->project_id}}</td>
                    <td>{{ App\Models\User::where('id',$pay->user_id)->first()->name}}</td>
                    <td>{{$pay->amount}}</td>
                    <td>{{$pay->paypal_id}}</td>
                    <td>{{$pay->created_at}}</td>
                    <td></td>

                @endforeach


            </tbody>
        </table>

        @else


            <div class="jumbotron m-5">
            <p class="text-center"> {{  Spatie\Emoji\Emoji::TiredFace()}}</p>

            <p class="text-yellow-500 text-2xl text-center font-normal">No complete transaction at the moment</p>


            </div>
        @endif

        <div class="aiz-pagination aiz-pagination-center">

        </div>
    </div>

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
