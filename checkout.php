<?php

require __DIR__. "/vendor/autoload.php";
$stripe_secret_key="sk_test_51OWaZrK5EnjB4COxumhtIL4diWi9Mt7nQSyWDWayY7e1gRkeZYQokVinyxWFkVaZDRbT8J2kw0iegNQPvLQFv1A70020KaGolv";
\Stripe\Stripe::setApiKey($stripe_secret_key);
$checkout_session=\Stripe\Checkout\Session::create([
    "mode"=>"payment",
    "success_url"=>"http://localhost:8080/success.php",
    "cancel_url"=>"http://localhost:8080/index.php",
    "locale"=>"en",
    "line_items"=>[
        [
           "quantity"=>1,
           "price_data"=>[
            "currency"=>"usd",
            "unit_amount"=>2000,
            "product_data"=>[
                "name"=>"Dress"
            ]
            
             ]

            ], [
                "quantity"=>2,
                "price_data"=>[
                 "currency"=>"usd",
                 "unit_amount"=>200,
                 "product_data"=>[
                     "name"=>"Skirt"
                 ]
                 
      ]
       ]
    ]
]);
http_response_code(303);
header("Location:" .$checkout_session->url);

?>