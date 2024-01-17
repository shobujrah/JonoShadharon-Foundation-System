<?php

namespace App\Http\Controllers;

use App\Models\Crisis;
use App\Models\Donate;
use App\Models\Donor;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $crisis=Crisis::count();
        $donor=Donor::count();
        $volunteers=User::where('role','volunteer')->count();
        return view('backend.pages.dashboard',compact('crisis','volunteers','donor'));
    }

}
