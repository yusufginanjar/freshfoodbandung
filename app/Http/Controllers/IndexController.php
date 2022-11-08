<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Gallery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // debug time zone

        return view('index', [
            "title" => "Home",
            "products" => Product::take(6)->get(),
            "blogs" => Blog::take(3)->get(),
            "galleries" => Gallery::take(6)->get()
        ]);
    }
}
