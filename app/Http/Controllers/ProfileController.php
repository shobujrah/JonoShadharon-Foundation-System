<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function admin_profile(){

        return view('frontend.Profile.adminProfile');

    }
    public function update(Request $request ,$id){

        //dd($request->all());
        $update = User::find($id);

        $update->update([

            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,



        ]);
Alert::toast()->success('Profile Updated Success');

        return back();

    }
}
