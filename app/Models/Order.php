<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'cart_id',
        'first_name',
        'last_name',
        'company',
        'country',
        'province',
        'address',
        'postcode',
        'whatsapp',
        'not_whatsapp',
        'email',
        'notes',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
