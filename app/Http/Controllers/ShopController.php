<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function cart()
    {
        return view('cart', [
            "title" => "Cart",
            "products" => Product::take(6)->get()
        ]);
    }

    public function checkout()
    {
        return view('checkout', [
            "title" => "Checkout",
            // "user" => User::()

        ]);
    }

    public function completed()
    {
        return view('completed', [
            "title" => "Completed"
        ]);
    }
}
