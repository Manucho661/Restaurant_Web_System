<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class payController extends Controller
{
    //
    public function pay(Request $request, $totalPrice){
        $cart= session()->get('cart');
        
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode='174379';
        $LipaNaMpesaPasskey= 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType= 'CustomerPayBillOnline';
        $Amount=$totalPrice;
        $PartyA= $request->phone;
        $PartyB= '174379';
        $PhoneNumber= $request->phone;
        $CallBackURL= 'http://nuchorestaurant.co.ke';
        $AccountReference= 'accountReference';
        $TransactionDesc= 'AccountReference';
        $Remarks='$Remarks';
        $stkPushSimulation=$mpesa->STKPushSimulation(
        $BusinessShortCode,
        $LipaNaMpesaPasskey, 
        $TransactionType, 
        $Amount, 
        $PartyA, 
        $PartyB, 
        $PhoneNumber, 
        $CallBackURL, 
        $AccountReference, 
        $TransactionDesc, 
        $Remarks);
        session()->forget('cart');

        return redirect()->route('home');
    }
    
}
