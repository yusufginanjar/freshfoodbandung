<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $table = 'shipping_addresses';
    protected $fillable = [
        'user_id',
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

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
