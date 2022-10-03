<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table = 'cart_details';
    protected $fillable = [
        'product_id',
        'cart_id',
        'qty',
        'price',
        // 'diskon', 
        'subtotal',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
        // return $this->belongsTo('App\Models\Cart', 'cart_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
        // return $this->belongsTo('App\Models\Product', 'produk_id');
    }

    // function untuk update qty, sama subtotal
    public function updatedetail($itemdetail, $qty, $price)
    {
        $this->attributes['qty'] = $itemdetail->qty + $qty;
        $this->attributes['subtotal'] = $itemdetail->subtotal + ($qty * ($price));
        if ($this->attributes['qty'] < 0) {
            $this->attributes['qty'] = 0;
        }
        if ($this->attributes['subtotal'] < 0) {
            $this->attributes['subtotal'] = 0;
        }

        self::save();
    }
}
