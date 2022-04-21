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
        return view('index', [
            "title" => "Home",
            "blogs" => Blog::all(),
            "products" => Product::all(),
            "galleries" => Gallery::all()
        ]);
    }
}
