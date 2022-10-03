<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\ShippingAddress;
use App\Models\Order;
use App\Http\Controllers\MailController;

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
        $itemcart = Cart::where('user_id', $itemuser->id)
            ->where('status_cart', 'cart')
            ->first();

        return view('cart', [
            "title" => "Cart",
            "products" => $itemcart
        ])->with('no', 1);
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

        $this->validate($request, [
            'first_name' => 'required|min:3',
            'country' => 'required',
            'province' => 'required|min:3',
            'address' => 'required|min:8',
            'email' => 'required|email',
        ]);


        // $itemuser = $request->user();
        if ($request->has('not_whatsapp') === true) {
            $request['not_whatsapp'] = 1;
            $request['whatsapp'] = 'Not Using Whatsapp';
        } else {
            $request['not_whatsapp'] = 0;
            $this->validate($request, [
                'whatsapp' => 'required',
            ]);
        }

        $userId = Auth::user()->id;
        $itemcart = Cart::where('status_cart', 'cart')
            ->where('user_id', $userId)
            ->first();

        $request['cart_id'] = $itemcart->id;

        if ($itemcart) {
            Order::create($request->all());

            $media = 'email and whatsapp';
            $contact = $request['email'] . ' and ' . $request['whatsapp'];
            if ($request['not_whatsapp'] == 1) {
                $contact = $request['email'];
                $media = 'email';
            };

            $carts = Cart::where('user_id', $userId)
                ->where('status_cart', 'cart')
                ->first();


            app('App\Http\Controllers\MailController')->sendEmail($request, $carts);

            $itemcart->update(['status_cart' => 'checkout']);
            return view('completed', [
                "title" => "Completed",
                "contact" => $contact,
                "media" => $media
            ]);
        } else {
            return abort('404');
        }


        // ShippingAddress::create($request->all());


        // if ($itemcart) {

        //     $shippingaddress = ShippingAddress::where('user_id', $itemuser->id)->first();

        //     $contact = $request['email'] . ' and ' . $request['whatsapp'];
        //     $media = 'email and whatsapp';

        //     if ($request['not_whatsapp'] == 1) {
        //         $contact = $request['email'];
        //         $media = 'email';
        //     };

        //     return view('completed', [
        //         "title" => "Completed",
        //         "contact" => $contact,
        //         "media" => $media
        //     ]);
        // }
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
