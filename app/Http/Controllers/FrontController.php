<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('home', compact('products', 'categories'));
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::paginate(12);
        return view('shop', compact('products', 'categories'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $search = $request->q;
        $products = Product::where('name', 'LIKE', "%{$search}%")->paginate(12);

        return view('shop', compact('products', 'categories'));
    }

    public function men(Request $request)
    {
        $categories = Category::all();
        $search = $request->search;
        $products = Product::where('gender', '=', "{$search}")->paginate(12);

        return view('shop', compact('products', 'categories'));
    }

    public function women(Request $request)
    {
        $categories = Category::all();
        $search = $request->search;
        $products = Product::where('gender', '=', "{$search}")->paginate(12);

        return view('shop', compact('products', 'categories'));
    }

    public function allProduct(Request $request)
    {
        $categories = Category::all();
        $search = $request->search;
        $products = product::paginate(12);

        return view('shop', compact('products', 'categories'));
    }

    public function filter(Request $request)
    {
        $categories = Category::all();
        $search = $request->price;
        if($search == '0-2000'){
            $products = Product::where('price', '<', 2000)->paginate(12);
        }
        elseif($search == '2000-4000'){
            $products = Product::where('price', '>', 2000, 'and', '<', 4000)->paginate(12);
        }
        elseif($search == '4000+') {
            $products = Product::where('price', '>',  4000)->paginate(12);
        }
        else {
            $products=Product::all();
        }

        return view('shop', compact('products', 'categories'));
    }
}