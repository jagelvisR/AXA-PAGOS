<?php

// Cargamos Requests y Culqi PHP
include_once dirname(__FILE__).'/libraries/Requests/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__).'/libraries/culqi-php/lib/culqi.php';

$SECRET_KEY = "sk_test_lTa82JQvsVjYBQan"; // llave privada

$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$charge = $culqi->Charges->create(
 array(
     "amount" => 1500,
     "currency_code" => "PEN",
     "email" => "test_charge@culqi.com",
     "source_id" => "id del objeto Token o id del objeto Card"
   )
);
?>
