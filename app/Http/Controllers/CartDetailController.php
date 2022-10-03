<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Http\Requests\StoreCartDetailRequest;
use App\Http\Requests\UpdateCartDetailRequest;
use App\Models\Product;

class CartDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCartDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
        ]);
        $itemuser = $request->user();
        $itemproduct = Product::findOrFail($request->product_id);

        $cart = Cart::where('user_id', $itemuser->id)
            ->where('status_cart', 'cart')
            ->first();

        if ($cart) {
            $itemcart = $cart;
        } else {
            $no_invoice = Cart::where('user_id', $itemuser->id)->count();
            //nyari jumlah cart berdasarkan user yang sedang login untuk dibuat no invoice
            $inputancart['user_id'] = $itemuser->id;
            $inputancart['no_invoice'] = 'FFB-0 ' . str_pad(($no_invoice + 1), '3', '0', STR_PAD_LEFT);
            $inputancart['status_cart'] = 'cart';
            // $inputancart['status_pembayaran'] = 'belum';
            // $inputancart['status_pengiriman'] = 'belum';
            $itemcart = Cart::create($inputancart);
        }

        $cekdetail = CartDetail::where('cart_id', $itemcart->id)
            ->where('product_id', $itemproduct->id)
            ->first();

        $qty = 1; // diisi 1, karena kita set ordernya 1
        $price = $itemproduct->price; //ambil price product
        $subtotal = ($qty * $price);

        if ($cekdetail) {
            // update detail di table cart_detail
            $cekdetail->updatedetail($cekdetail, $qty, $price);
            // update subtotal dan total di table cart
            $cekdetail->cart->updatetotal($cekdetail->cart, $subtotal);
        } else {
            $inputan = $request->all();
            $inputan['cart_id'] = $itemcart->id;
            $inputan['product_id'] = $itemproduct->id;
            $inputan['qty'] = $qty;
            $inputan['price'] = $price;
            $inputan['subtotal'] = ($price * $qty);
            $itemdetail = CartDetail::create($inputan);
            // update subtotal dan total di table cart
            $itemdetail->cart->updatetotal($itemdetail->cart, $subtotal);
        }

        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CartDetail $cartDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CartDetail $cartDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartDetailRequest  $request
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $itemdetail = CartDetail::findOrFail($id);
        $param = $request->param;

        if ($param == 'plus') {
            // update detail cart
            $qty = 1;
            $itemdetail->updatedetail($itemdetail, $qty, $itemdetail->price);
            // update total cart
            $itemdetail->cart->updatetotal($itemdetail->cart, ($itemdetail->price));
            return back()->with('success', 'Item berhasil diupdate');
        }
        if ($param == 'minus') {
            // update detail cart
            $qty = 1;
            $itemdetail->updatedetail($itemdetail, '-' . $qty, $itemdetail->price);
            // update total cart
            $itemdetail->cart->updatetotal($itemdetail->cart, '-' . $itemdetail->price);
            return back()->with('success', 'Item berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemdetail = CartDetail::findOrFail($id);
        // update total cart dulu
        $itemdetail->cart->updatetotal($itemdetail->cart, '-' . $itemdetail->subtotal);
        if ($itemdetail->delete()) {
            return back()->with('success', 'Item berhasil dihapus');
        } else {
            return back()->with('error', 'Item gagal dihapus');
        }
    }
}
