<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'no_invoice',
        'status_cart',
        // 'status_pembayaran',
        // 'status_pengiriman',
        // 'no_resi',
        // 'ekspedisi',
        'subtotal',
        // 'ongkir',
        // 'diskon',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function detail()
    {
        // return $this->hasMany(CartDetail::class);
        return $this->hasMany('App\Models\CartDetail', 'cart_id');
    }

    public function updatetotal($itemcart, $subtotal)
    {
        // @dd($itemcart->subtotal, $subtotal);
        $this->attributes['subtotal'] = (float)$itemcart->subtotal + (float)$subtotal;
        $this->attributes['total'] = (float)$itemcart->total + (float)$subtotal;
        self::save();
    }
}
