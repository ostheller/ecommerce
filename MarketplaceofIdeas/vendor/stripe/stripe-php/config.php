<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_7NlolFaIBOfT65JPmcmtHFEH",
  "publishable_key" => "pk_test_2x9PR3c3iakOD6QuKD9Gl2Cv"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>