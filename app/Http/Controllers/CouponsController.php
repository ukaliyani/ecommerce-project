<?php

namespace App\Http\Controllers;

use App\Models\coupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('coupons_table', compact('coupons'));
    }

    public function create()
    {
        return view('coupons');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:coupons,code',
            'discount_type' => 'required',
            'discount_value' => 'required|numeric',
            'status' => 'required',
        ]);

        coupon::create($request->all());
        return redirect()->route('coupons.index')->with('success', 'Coupon created successfully!');
    }

    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('edit_coupons', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::findOrFail($id);

        $request->validate([
            'code' => 'required|unique:coupons,code,' . $coupon->id,
            'discount_type' => 'required',
            'discount_value' => 'required|numeric',
            'status' => 'required',
        ]);

        $coupon->update($request->all());
        return redirect()->route('coupons.index')->with('success', 'Coupon updated successfully!');
    }

    public function destroy($id)
    {
        Coupon::findOrFail($id)->delete();
        return redirect()->route('coupons.index')->with('success', 'Coupon deleted successfully!');
    }
}
