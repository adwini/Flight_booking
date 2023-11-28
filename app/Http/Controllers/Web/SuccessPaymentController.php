<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuccessPaymentController extends Controller
{
    public function success () {
        return view('success');
    }
}