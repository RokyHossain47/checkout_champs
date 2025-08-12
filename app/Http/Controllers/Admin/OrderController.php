<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // $orders = Order::all();
        // return view('admin.orders.index', compact('orders'));
        return view('admin.orders.index');
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        // $data = $request->validate([...]);
        // Order::create($data);
        return redirect()->route('admin.orders.index')->with('success', 'Order created successfully.');
    }

    public function show($id)
    {
        // $order = Order::findOrFail($id);
        // return view('admin.orders.show', compact('order'));
        return view('admin.orders.show');
    }

    public function edit($id)
    {
        // $order = Order::findOrFail($id);
        // return view('admin.orders.edit', compact('order'));
        return view('admin.orders.edit');
    }

    public function update(Request $request, $id)
    {
        // $order = Order::findOrFail($id);
        // $data = $request->validate([...]);
        // $order->update($data);
        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy($id)
    {
        // $order = Order::findOrFail($id);
        // $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}
