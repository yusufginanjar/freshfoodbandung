<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\ShippingAddress;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemuser = $request->user();
        // $user = Auth::user();
        // @dd($user);
        $itemcart = Cart::where('user_id', $itemuser->id)
            ->where('status_cart', 'cart')
            ->first();
        if ($itemcart) {
            return view('cart', [
                "title" => "Cart",
                "products" => $itemcart
            ])->with('no', 1);
        } else {
            return abort('404');
        }
    }

    public function checkout(Request $request)
    {
        $itemuser = $request->user();
        $itemcart = Cart::where('user_id', $itemuser->id)
            ->where('status_cart', 'cart')
            ->first();

        if ($itemcart) {
            $data = array(
                'title' => 'Checkout',
                'products' => $itemcart
            );
            return view('checkout', $data)->with('no', 1);
        } else {
            return abort('404');
        }

        return view('checkout', [
            "title" => "Checkout",
            // "user" => User::()

        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itemuser = $request->user();
        if ($request->has('not_whatsapp') === true) {
            $request['not_whatsapp'] = true;
        } else {
            $request['not_whatsapp'] = false;
        }



        $request['user_id'] = $itemuser->id;
        ShippingAddress::create($request->all());


        $itemcart = Cart::where('status_cart', 'cart')
            ->where('user_id', $itemuser->id)
            ->first();
        if ($itemcart) {
            $shippingaddress = ShippingAddress::where('user_id', $itemuser->id)->first();

            $contact = $shippingaddress->whatsapp;
            $media = 'whatsapp';
            // @dd($shippingaddress->not_whatsapp);
            if ($shippingaddress->not_whatsapp == 1) {
                $contact = $shippingaddress->email;
                $media = 'email';
            };

            return view('completed', [
                "title" => "Completed",
                "contact" => $contact,
                "media" => $media
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
