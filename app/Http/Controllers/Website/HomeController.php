<?php

namespace App\Http\Controllers\Website;

use App\Models\Crisis;
use Faker\Guesser\Name;
use App\Models\Location;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Models\VolunteerUser;
use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Foundation\Auth\User;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\Psr7\Request as Psr7Request;

class HomeController extends Controller
{
    public function homepage(){


        $crisis=Crisis::all();
        $locations=Location::all();

       // $vol = VolunteerUser::all();
       $volunteers=User::where('role','volunteer')->get();
        return view('frontend.pages.home',compact('crisis','locations','volunteers'));
    }


    public function location(){
        $locations= Location::all();
        return view('frontend.pages.home',compact('locations'));
    }



    public function registration(){

        return view('frontend.pages.volunteers.create');
    }

    public function registration_store(Request $request){

        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address'=>'required'

        ]);





        VolunteerUser::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'address' =>$request->address,
        ]);

        return redirect()->back();

    }

    public function login(){

        return view('frontend.pages.login');

    }
    public function login_match(Request $request)
    {

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->guard('samsu')->attempt($credentials))
        {
            return redirect()->route('homepage');
        }
        return redirect()->route('homepage');

    }


}
