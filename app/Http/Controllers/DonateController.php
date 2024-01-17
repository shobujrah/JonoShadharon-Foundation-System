<?php

namespace App\Http\Controllers;

use App\Models\Crisis;
use App\Models\Donate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class DonateController extends Controller
{


    public function donateForm($crisisId){

        $crisis = Crisis::find($crisisId);
        return view('frontend.pages.donate.donate',compact('crisis'));
    }

    public function donatestore(Request $request ){

       // dd($request->all());





        $crisis = Crisis::find($request->crisis_id);

        $latestDonationAmount = $request->amount;

        $remainingAmount = max(0, $crisis->amount_need - $latestDonationAmount);

        // Update the crisis's amount_need with the new remaining amount

        $validator = Validator::make($request->all(), [
            'suggestion' => 'required|string|max:255',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'amount' => [
                'required',
                'numeric',
                'min:0',
                function ($attribute, $value, $fail) use ($crisis) {
                    $remainingAmount = max(0, $crisis->amount_need);
                    if ($value > $remainingAmount) {
                        $fail('The donation amount cannot exceed the remaining amount needed.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {

            Alert::toast()->error('The donation amount cannot exceed the remaining amount needed.', 'success');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($request->all());

        Donate::create([

            "name" => $request->name,
            "email" => $request->email,
            "phone"=>$request->phone,
            "address"=>$request->address,
            "amount" => $request->amount,
            "method" => $request->method,
            "crisis_id" => $request->crisis_id,
            "suggestion" => $request->suggestion,

        ]);

        $crisis->update([
            "amount_need" => $remainingAmount,
        ]);


        Alert::toast()->success('Donation made successfully', 'success');
        return redirect()->back();
    }

    public function donateinfo(){

        //dd('donateinfo');
        $donate = Donate::all();
        return view('frontend.pages.volunteers.donartinfo',compact('donate'));
    }
}
