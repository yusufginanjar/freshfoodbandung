<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function cart()
    {
        return view('cart', [
            "title" => "Cart"
        ]);
    }

    public function checkout()
    {
        return view('checkout', [
            "title" => "Checkout"
        ]);
    }

    public function completed()
    {
        return view('completed', [
            "title" => "Completed"
        ]);
    }
}
