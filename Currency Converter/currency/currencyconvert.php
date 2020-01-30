<?php
if(isset($_POST['submit'])){
	$amount = $_POST['amount'];
	$req_url = 'https://api.exchangeratesapi.io/latest?base=USD'; // API Url  
  $response_json = file_get_contents($req_url); // response of API
  if(false !== $response_json) {
  	try {
		  $response_object = json_decode($response_json);
    	$INR_price = round(($amount * $response_object->rates->INR), 2); // Get INR Price
    	echo "<center><b>Your Converted Amount is:</b><br>".$INR_price."</center>";
   	}
   	catch(Exception $e) {
      return $e->message;
   	}
  }
}
?>