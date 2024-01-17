<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{

    public function index_donor(){

      $donor=Donor::all();
        return view('backend.pages.donor.index',compact('donor'));
    }
    public function create_donor()
    {
      return view('backend.pages.donor.create');
    }

 public function store_donor(Request $request)
   {
    $request->validate([
      'name'=>'required',
      'address'=>'required',
      'gender'=>'required',
      'phone'=>'required'
    ]);
    // dd($request->all());
    Donor::create([
        "name"              => $request->name,
        "address"           => $request->address,
        "date_of_birth"     => $request->date_of_birth,
        "gender"            => $request->gender,
        "phone"             => $request->phone

    ]);
     return redirect()->route('index.donor');
   }


     public function donor_report(){

      return view('backend.pages.donor.donorReport');

     }

     public function donation_proposal_list(){

        $donations=Donate::all();

        return view('backend.pages.donation.proposal', compact('donations'));

       }




}

