<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\ClientToken;

class PaymentController extends Controller
{
    public function index()
{
    $clientToken = ClientToken::generate();

    return response()->json([
        'clientToken' => $clientToken
    ]);
}
}
