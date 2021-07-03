<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('home', compact('products', 'categories'));
    }

    public function quicklook(Product $product)
     {
        $sizes = explode(',', $product->sizes);
        $colors = explode(',', $product->colors);
        return view('quicklook', compact('product','sizes','colors'));
    }

    public function cart () {
        return view('cart');
    }

    public function favroite () {
        return view('favroite');
    }

    

    public function profile() {
        return view('profile');
    }
}
