<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalTodayOrder = Order::whereDate('created_at', now())->count();
        $todayOrders = Order::whereDate('created_at', now())->get();
        $totalProducts = Product::count();
        $totalCustomers = User::count();

        return view('admin.index', compact('totalTodayOrder', 'todayOrders', 'totalProducts', 'totalCustomers'));
    }
}
