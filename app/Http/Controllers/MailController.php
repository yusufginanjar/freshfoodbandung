<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class MailController extends Controller
{
    public function sendEmail($request, $carts)
    {
        $details = [
            // 'orderNo' => $request["id"],
            'cart_id' => $request["cart_id"],
            'first_name' => $request["first_name"],
            'last_name' => $request["last_name"],
            'email' => $request["email"],
            'whatsapp' => $request["whatsapp"],
            'company' => $request["company"],
            'address' => $request["address"],
            'province' => $request["province"],
            'country' => $request["country"],
            'postcode' => $request["postcode"],
            'notes' => $request["notes"],
            'created_at' => $request["created_at"],
            'carts' => $carts,
        ];

        Mail::to($request["email"])->cc("freshfoodbandung01@gmail.com")->send(new Email($details));
    }
}
