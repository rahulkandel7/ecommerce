<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::all();
        return view('carts.index', compact('carts'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'quantity' => ['required', 'integer'],
            'size' => ['required'],
            'color' => ['required'],
        ]);

        if(Cart::where('user_id', '=', $data['user_id'])->where('product_id', $data['product_id'], )->exists()){
            return redirect(route('quicklook',$data['product_id']))->with('delete', 'Product already in cart');
        }


        Cart::create($data);

        return redirect(route('quicklook',$data['product_id']))->with('sucess', 'Product added to cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        return view('carts.edit',compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'quantity' => ['required', 'integer'],
            'size' => ['required'],
            'color' => ['required'],
        ]);

        $cart->update($data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();

        return redirect(route('carts.index'));
    }
}
