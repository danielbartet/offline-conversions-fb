<?php
namespace DanielBartet\OfflineConversionFB;


use Carbon\Carbon;
use Ixudra\Curl\Facades\Curl;

class OfflineConversion {

  public function sendConversion($mail, $monto){

    if(config('offlineconversion.idEventSet')){
      $url = "https://graph.facebook.com/v2.10/".config('offlineconversion.idEventSet')."/events";       
      $today = (new Carbon())->now();
      $hashEmail = hash('sha256', $mail);
      $parameters = [
          "access_token" => config('offlineconversion.access_token'),
          "upload_tag" => config('offlineconversion.upload_tag'), 
          "data" => [json_encode(
              [
                'match_keys'=> [
                  'email'=> [
                    $hashEmail
                  ]
                ], 
                'currency'=> config('offlineconversion.currency'), 
                'value'=> $monto,
                'event_name'=> config('offlineconversion.event_name'),
                'event_time'=> $today->getTimestamp(),
                'custom_data'=> [
                  'product_category'=> config('offlineconversion.product_category')
                ]
              ])
          ]
      ];

      return Curl::to($url)
          ->withData($parameters)
          ->asJsonResponse()
          ->post();
    }

    return null;

    //dd($datosJson);
  }

}

?>