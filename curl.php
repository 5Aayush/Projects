<?php

function convertCurrency($from_currency="USD",$to_currency="INR",$amount=1){

    $req_url = 'https://api.exchangerate.host/latest?base='.$from_currency.'&amount='.$amount.'&symbols='.$to_currency;

    $response_json = file_get_contents($req_url);

    $hasConversion = false;
    $converted_amount = 0;
    if(false !== $response_json) {
        try {
            $response = json_decode($response_json);

            if($response->success === true) {

                 // Read conversion rate
                 $converted_amount = round($response->rates->$to_currency,2);

                 $hasConversion = true;
            }

        } catch(Exception $e) {
            // Handle JSON parse error...

        }
    }

    $return_arr = array(
        "success" => $hasConversion,
        "amount" => $amount,
        "converted_amount" => $converted_amount
    );

    return $return_arr;
}

$from_currency = "USD";
$to_currency = "INR";
$amount = 10;

$response = convertCurrency($from_currency,$to_currency,$amount);

echo "<pre>";
print_r($response);
echo "</pre>";