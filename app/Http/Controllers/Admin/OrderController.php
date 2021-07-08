<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $total = Order::count();
        $todayOrders = Order::whereDate('created_at', now())->get();
        $totalOrders = Order::paginate(10);
        $totalTodayOrder = Order::whereDate('created_at', now())->count();
        return view('admin.orders.index', compact('orders', 'total', 'todayOrders', 'totalTodayOrder', 'totalOrders'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // @dd($request->all());
        $data = $request->validate([
            'status' => 'required',
        ]);

        $order->update($data);

        return redirect(route('admin.orders.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect(route('admin.orders.index'));
    }

    public function totalOrder()
    {
        $orders = Order::all();
        $total = Order::count();
        $totalOrders = Order::paginate(10);
        return view('admin.orders.totalOrder', compact('orders', 'total', 'totalOrders'));
    }

}
