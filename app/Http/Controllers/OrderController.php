<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('order_table', compact('orders'));
    }

    public function create()
    {
        return view('order_product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'total_amount' => 'required|numeric',
            'payment_method' => 'required',
            'payment_status' => 'required',
            'order_status' => 'required',
            'shipping_address' => 'required',
            'city' => 'required',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order created successfully!');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('edit.order', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'total_amount' => 'required|numeric',
            'payment_method' => 'required',
            'payment_status' => 'required',
            'order_status' => 'required',
            'shipping_address' => 'required',
            'city' => 'required',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
    }

    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }
}
