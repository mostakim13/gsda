<?php

namespace App\Http\Controllers;

use App\Models\Zoom;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    public function index()
    {
    }
    public function zoomStore(Request $request)
    {
        $user = Zoom::user();
        $thing = $zoom->thing->where('Name', 'Test Name')->first();
        $user = $zoom->user->create([
            'name' => 'Test Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'test@test.com',
            'password' => 'secret',
            'type' => 1
        ]);
        $meeting = $user->meetings()->create([
            'type' => '2',
            'start_time' => '2019-06-29T20:00:00Z'
        ]);
        $registrant = $meeting->registrants()->create([
            'email' => 'registratn@domain.com',
            'first_name' => 'Test',
            'last_name' => 'Registrant'
        ]);
    }
}
