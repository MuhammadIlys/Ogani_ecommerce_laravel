<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopDetailsController extends Controller
{
    public function index(){
        return view('frontend.shop-details');
    }
}
