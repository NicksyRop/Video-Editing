<?php

namespace App\Http\Controllers;

use App\Models\ClientPaypal;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function __construct(){

        $this->middleware('admin');
    }


    public function payments(){

        $payments = ClientPaypal::all();

      //  dd($payments);

        return view('admin.paypal.payment')->with('payments',$payments);
    }




public function paypal(){



$BASIC_AUTH_USER="AZm3doFyGAfk0BNVwh_gDS6vWnkdigHgnOiO_5ojrJcQX8tU4uWEmsXy5z42FAgeCYpZBbB-TllQMnqk";
$BASIC_AUTH_PASSWORD="ELGm2xVZuXouMoTqZQ7uAnNctJHNK64YyBaLc3swVJIbKFJJe2yWSCnbchOjWqbQ8K1kxKBJZJg-66dd";

$cURLConnection = curl_init('https://api-m.sandbox.paypal.com/v1/oauth2/token');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURLConnection, CURLOPT_USERPWD, $BASIC_AUTH_USER . ":" . $BASIC_AUTH_PASSWORD);
curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
  "Content-Type" => "application/json",
  "Accept" =>  "application/json",
  "Accept-Language" => "en_US",


));


 $apiResponse = curl_exec($cURLConnection);
 curl_close($cURLConnection);


  $jsonArrayResponse = json_decode($apiResponse);

  $array =  (array) $jsonArrayResponse;

 $token = $array["access_token"];



        $s='{
            "sender_batch_header": {
              "sender_batch_id": "Payouts_2018_4534555047",
              "email_subject": "You have a payout!",
              "email_message": "You have received a payout! Thanks for using our service!"
            },
            "items": [
              {
                "recipient_type": "EMAIL",
                "amount": {
                  "value": "9.87",
                  "currency": "USD"
                },
                "note": "Thanks for your patronage!",
                "sender_item_id": "201403140001",
                "receiver": "sb-uubtt6405506@personal.example.com",
                "alternate_notification_method": {
                  "phone": {
                    "country_code": "254",
                    "national_number": "2545340818"
                  }
                },
                "notification_language": "fr-FR"
              },{
                      "recipient_type": "PHONE",
                      "amount": {
                        "value": "112.34",
                        "currency": "USD"
                      },
                      "note": "Thanks for your support!",
                      "sender_item_id": "201403140002",
                      "receiver": "91-734-234-1234"
                    }
            ]
          }';


        $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,            "https://api-m.sandbox.paypal.com/v1/payments/payouts" );
           ;
            curl_setopt($ch, CURLOPT_POSTFIELDS,   $s );
            curl_setopt($ch, CURLOPT_HTTPHEADER,     array(

                "Content-Type: application/json",
                "Authorization:Bearer $token"

            ));

            $result=curl_exec ($ch);
            return $result;
    }

    public function payouts(){

        $BASIC_AUTH_USER="AWp3jVdzfcFsMa9YBrMDomXMaIydIZgl-mhm6gNe73NkAXcdIck9S-KIKiMlo3tJ36Mm7_NQ2TQUfdOy";
        $BASIC_AUTH_PASSWORD="EHU9h8Jy3-p2nHhvpdtH19ojp9XTfyFBWp3lq_S0BFy9MMA3vDZYbaEUwtpg8UKhkZvObgKeVwwW5BM2";

        $cURLConnection = curl_init('https://api-m.sandbox.paypal.com/v1/oauth2/token');
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURLConnection, CURLOPT_USERPWD, $BASIC_AUTH_USER . ":" . $BASIC_AUTH_PASSWORD);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
        "Content-Type" => "application/json",
        "Accept" =>  "application/json",
        "Accept-Language" => "en_US",


        ));


            $apiResponse = curl_exec($cURLConnection);
            curl_close($cURLConnection);


            $jsonArrayResponse = json_decode($apiResponse);

            //return $jsonArrayResponse["access_token"];

            $array =  (array) $jsonArrayResponse;

            $token = $array["access_token"];


            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,            "https://api-m.sandbox.paypal.com/v1/payments/payouts/PLBX7HC4CG6Z8" );
            curl_setopt($ch, CURLOPT_HTTPHEADER,     array(

                "Content-Type: application/json",
                "Authorization:Bearer $token"

            ));

            $result=curl_exec ($ch);

            return json_encode( $result);
            $array =  (array) $result;

            return $array;



    }

}
