<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\User;
use App\Models\Zoom;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InstructorController extends Controller
{

    //====================Admin Instructor Start==========================//
    public function instructor()
    {

        $instructors = Instructor::all();
        return view('backend.pages.instructor.instructor', compact('instructors'));
    }
    public function addInstructor()
    {

        return view('backend.pages.instructor.addInstructor');
    }
    public function storeInstructor(Request $request)
    {
        $request->validate([
            'user_id' =>  'required',
        ]);
        Instructor::insert([
            'user_id' => $request->user_id,
        ]);
        $notification = array(
            'message' => 'Instructor Added Success',
            'alert-type' => 'success'
        );
        return Redirect()->route('instructor')->with($notification);
    }
    public function editInstructor($id){
        $instructor = Instructor::findOrFail($id);
        $users = User::all();
        return view('backend.pages.instructor.editInstructor',compact('users','instructor'));
    }
    public function updateInstructor(Request $request)
    {
        $request->validate([
            'user_id' =>  'required',
        ]);

        $id = $request->id;
        Instructor::findOrFail($id)->update([
            'user_id' => $request->user_id,
        ]);
        $notification = array(
            'message' => 'Instructor Added Success',
            'alert-type' => 'success'
        );
        return Redirect()->route('instructor')->with($notification);
    }
    public function delete($id){
        Instructor::findOrFail($id)->delete();
        $notification=array(
         'message'=>'Instructor Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }
    //====================Admin Instructor End==========================//

    //====================Frontend Instructor Start==========================//
    public function index(){
        return view('frontend.instructor.instructor');
    }
    public function storeZoom(Request $request){
        Zoom::insert([
            'topic' => $request->topic,
            'startDate' => $request->startDate,
            'startTime' => $request->startTime,
            'hour' => $request->hour,
            'minute' => $request->minute,
            'created_at' => Carbon::now()
        ]);
        $notification=array(
            'message'=>'Zoom data added Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
