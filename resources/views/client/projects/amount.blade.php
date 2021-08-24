@extends('frontend.default.layouts.app')
@section('content')
<div class="container">

    <div class="col-md-10 ml-5">

        <div class="jumbotron p-5 mt-5 text-center">

            <h4>Dear client your video is {{ $minutes}} minute(s)  {{$seconds}} seconds long.Deposit {{$amount}}  dollars to your wallet so that we can approve this project.</h4>
            <div class="mt-5" id="paypal-button-container"></div>

        </div>

        <form id="payment-form" action="{{ route('project.update',$id)}}" method="POST">
            @csrf

            @method('PUT')
            <input type="hidden" name="amount" value="{{ $amount}}">
            <input type="hidden" name="duration" value="{{ $timestring}}">
            <input type="hidden" name="freelancer_pay" value="{{ $f_amount}}">



        </form>

    </div>










</div>

@endsection

@section('paypal')
        <script
        src="https://www.paypal.com/sdk/js?client-id=AVWD7Um7LoJMicCdHjhTi3RcnmgQskbgUonfaCaRBI2qdEELMUmoo6QOIikRvO1YmbFxqPgzhuxwBUKm&disable-funding=credit,card">
        </script>

<script>

    paypal.Buttons({

        style :{

            shape: 'pill',
            color :'blue',
            size: 'small',
        },

      createOrder: function(data, actions) {
        //Var amount = {{ $amount}};
        return actions.order.create({
           // Var amount = {{ $amount }};
          purchase_units: [{
            amount: {


              value: {{ $amount }}
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.


           return actions.order.capture().then( function (details) {
                            let form = document.getElementById("payment-form")
                            let payment = document.createElement("input")
                            let amount = document.createElement("input")

                            payment.setAttribute("type", "hidden")
                            payment.setAttribute("name", "payment")
                            payment.setAttribute("value", details.id)


                            form.appendChild(payment)
                            form.submit()
                        });


      },
      onCancel: function(data, actions) {

        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        });


        window.location.href = "{{ route('project.index')}}";
      },


    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
  </script>
@endsection



