<?php
// set API Endpoint and API key
$endpoint = 'latest';
$access_key = '34fc3ae74f657c1aba7c9df03585fb36';


if(isset($_POST['submit'])){
    
}
// Initialize CURL:
$ch = curl_init('http://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);

// Access the exchange rate values, e.g. GBP:
echo $exchangeRates['rates']['INR'];
?>