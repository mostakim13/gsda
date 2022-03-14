<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Course;
use App\Models\ClassroomCourse;
use App\Models\System;
use App\Models\CourseCategory;
use App\Models\User;
use App\Models\MainCategory;
use App\Models\Coupon;
use Carbon\Carbon;
use Session;
use Auth;
use Illuminate\Contracts\Session\Session as SessionSession;

class CartController extends Controller
{

    public function index()

    {
        $course_categories = CourseCategory::all();
        $main_categories = MainCategory::all();
        return view('frontend.users.cart', compact('course_categories', 'main_categories'));
    }
    public function add_cart(Request $request)
    {

        $course_id = $request->course_id;
        $classroom_course_id = $request->classroom_course_id;
        $user_id = $request->user_id;
        $ip_address = $request->ip();

        //session()->put('course_id', $course_id);
        $cart = Session()->get('cart');
        $cart[] = array(
            "course_id" => $course_id,
            "classroom_course_id" => $classroom_course_id,
            "user_id" => $user_id,
            "qty" => 1,
        );

        Session()->put('cart', $cart);

        if (Auth::check()) {

            $cart = Cart::where('user_id', Auth::id())

                ->where('course_id', $request->course_id)

                ->first();
        } else {
            $cart = Cart::where('ip_address', request()->ip())

                ->where('course_id', $request->course_id)

                ->first();
        }
        if (!is_null($cart)) {
            //

        } else {
            $cart = new Cart();

            if (Auth::check()) {
                $cart->user_id = Auth::id();
            }
            $cart->course_id = $course_id;
            $cart->classroom_course_id = $classroom_course_id;
            $cart->ip_address = $ip_address;


            $cart->save();
        }



        $notification = array(
            'message' => 'Course has been added to cart successfully!!!',
            'alert-type' => 'success'
        );
        return Redirect()->route('carts')->with($notification);
    }
    public function deleteCart($id)
    {

        $cart = Cart::find($id);
        $cart->delete();
        return back()->with('cart_deleted', 'Course has been deleted from cart successfully!');
    }
    public function BuyNow(Request $request)
    {

        $course_id = $request->course_id;
        $classroom_course_id = $request->classroom_course_id;
        $user_id = $request->user_id;
        $ip_address = $request->ip();


        if (Auth::check()) {

            $cart = Cart::where('user_id', Auth::id())

                ->where('course_id', $request->course_id)

                ->first();
        } else {
            $cart = Cart::where('ip_address', request()->ip())

                ->where('course_id', $request->course_id)

                ->first();
        }
        if (!is_null($cart)) {
            //

        } else {
            $cart = new Cart();

            if (Auth::check()) {
                $cart->user_id = Auth::id();
            }
            $cart->course_id = $course_id;
            $cart->classroom_course_id = $classroom_course_id;
            $cart->ip_address = $ip_address;


            $cart->save();
        }

        $course_categories = CourseCategory::all();
        $main_categories = MainCategory::all();

        $course = Course::where('id', $request->course_id)->get();


        return view('frontend.users.buynow', compact('course_categories', 'main_categories', 'course_categories'))->with('cart_added', 'Course has been added to cart successfully!');
    }
    public function deleteBuy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return view('frontend.users.buynow')->with('cart_deleted', 'Course has been deleted from cart successfully!');
    }
    public function couponApply(Request $request)
    {

        $coupon = Coupon::where('coupon_name', $request->coupon_name)->where('coupon_validity', '>=', Carbon::now()->format('Y-m-d'))->first();
        if ($coupon) {
            Session::put('coupon', [

                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round((int)($request->t_amount) * $coupon->coupon_discount / 100),
                'total_amount' => round((int)($request->total_amount) - round((int)($request->t_amount) * $coupon->coupon_discount / 100)),
            ]);
            return response()->json(['success' => 'Coupon Applied']);
        } else {
            return response()->json(['error' => 'Invalid Coupon']);
        }
    }
    //coupon calculation
    public function couponCalcaultion(Request $request)
    {

        if (Session::has('coupon')) {
            return response()->json(array(
                'subtotal' => round((int)($request->t_amount)),
                'coupon_name' => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => session()->get('coupon')['discount_amount'],
                'total_amount' => session()->get('coupon')['total_amount'],
            ));
        } else {
            return response()->json(array(
                'total' => round((int)($request->t_amount)),
            ));
        }
    }
    public function couponRemove()
    {
        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Successfully Removed']);
    }





    //=================================Apply Coupon=============================
    public function voucherCode(Request $request)
    {
        $coupon = Coupon::where('coupon_name', $request->coupon_name)->where('course_id', $request->course_id)->where('coupon_validity', '>=', Carbon::now()->format('Y-m-d'))->first();
        if ($coupon) {
            if ($coupon->coupon_discount >= 99) {
                Session::put('coupon', [
                    'course_id' => $request->course_id,
                    'coupon_name' => $coupon->coupon_name,
                    'coupon_discount' => $coupon->coupon_discount,
                    'discount_amount' => round((int)$coupon->coupon_discount),
                    'total_amount' => round((int)($request->price)) - round((int)$coupon->coupon_discount),
                ]);
            } else {
                Session::put('coupon', [
                    'course_id' => $request->course_id,
                    'coupon_name' => $coupon->coupon_name,
                    'coupon_discount' => $coupon->coupon_discount,
                    'discount_amount' => round((int)($request->price) * $coupon->coupon_discount / 100),
                    'total_amount' => round((int)($request->price)) - round((int)($request->price) * $coupon->coupon_discount / 100),
                ]);
            }

            return response()->json(['success' => 'Coupon Applied']);
        } else {
            return response()->json(['error' => 'Invalid Coupon']);
        }
    }

    public function voucherCalculation(Request $request)
    {
        if (Session::has('coupon')) {
            return response()->json(array(
                'total' => round((int)($request->price)),
                'coupon_name' => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => session()->get('coupon')['discount_amount'],
                'total_amount' => session()->get('coupon')['total_amount'],
            ));
        } else {
            return response()->json(array(
                'total' => round((int)($request->price)),

            ));
        }
    }
}
