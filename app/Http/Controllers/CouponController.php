<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Coupon;
use App\Models\Cart;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

class CouponController extends Controller
{
    public function create()
    {
        $coupons = Coupon::all();
        return view('backend.pages.coupon.create', compact('coupons'));
    }
    public function store(Request $request)
    {


        Coupon::insert([
            'course_id' => $request->course_id,
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Coupon Added Success',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function update(Request $request)
    {
        $coupon_id = $request->id;
        Coupon::findOrFail($coupon_id)->update([
            'course_id' => $request->course_id,
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'updated_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'Coupon Updated Success',
            'alert-type' => 'success'
        );
        return Redirect()->route('coupon')->with($notification);
    }
    public function destroy($coupon_id)
    {
        Coupon::findOrFail($coupon_id)->delete();
        $notification = array(
            'message' => 'Delete Success',
            'alert-type' => 'success'
        );
        return Redirect()->route('coupon')->with($notification);
    }

    public function inactive($id){
        Coupon::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Coupon Inactivated',
            'alert-type' => 'warning'
        );
        return Redirect()->back()->with($notification);
    }

    public function active($id){
        Coupon::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Coupon Activated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
