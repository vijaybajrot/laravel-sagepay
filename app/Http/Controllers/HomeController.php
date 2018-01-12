<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SagePay;

class HomeController extends Controller
{
    public function test()
    {
    	 $sagePay = SagePay::create(array(
    		  'fullUrl' => "http://192.168.100.62/sage/public/test",
          'currency' => "GBP",
    	 ));

        $sagePay->addBasketItems(array(
            "title" => "Test Item",
            'amount' => 10
        ));

        $sagePay->billing(array(
            "firstname"=> "Vijay",
            "lastname"=> "Bajrot",
            "address1"=> 'Address Line 1',
            "city" => "TestCity",
            "postcode" =>"SDA 879",
            "country" => "US",
            "state" => "AL",
            "phone" => "54564564654654654", //optional
            "email"=> "vijaysibghb787@mailable.com",
        ));

        $paymentArray = $sagePay->processPayment();

        //dd($sagePay->decode($paymentArray['request']['Crypt']));
        return view("payment",$paymentArray);
    }
}
