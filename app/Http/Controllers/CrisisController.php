<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Crisis;
use Illuminate\Http\Request;
use App\Models\VolunteerUser;
use App\Models\CrisisCategory;
use Illuminate\Foundation\Auth\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CrisisController extends Controller
{
   public function index()

   {
    $crises=Crisis::with([ 'volunteer' ,'category'])->get();
    // dd($crises);
    //$volunteers=User::with('volunteer')->get();
    return view('backend.pages.crisis.index',compact('crises'));
   }

   public function create()
   {

    //$volunteers= VolunteerUser::all();
    $volunteers=User::where('role','volunteer')->get();
    $crisisCategories=CrisisCategory::all();
     return view('backend.pages.crisis.create', compact('volunteers','crisisCategories'));
   }



   public function store(Request $request)
   {
    //  dd($request->all());

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'crisisCategory_id'=>'required',
        'description' => 'required|string',
        'from_date' => 'required|date|after_or_equal:today', // Validate that from_date is today or in the future
        'to_date' => 'required|date|after_or_equal:from_date', // Validate that to_date is after or equal to from_date
        'amount_need' => 'required|numeric|min:0',

        'about_crisis' => 'required|string',
        'image' => 'required',

    ]);

    if ($validator->fails()) {
        Alert::toast()->warning('Something went wrong', 'Failed');

        return redirect()->back()->withErrors($validator)->withInput();
    }


     //dd($request->all());


          $imageName = null;
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = date('Ymdis').'.'.$file->extension();
            $file->storeAs('uploads', $imageName, 'public');


           // dd($imageName);


    }
    Crisis::create([
        "name"          => $request->name,
        "crisisCategory_id"=>$request->crisisCategory_id,
        "description"   => $request->description,
        "from_date"     => $request->from_date,
        "to_date"       => $request->to_date,
        "amount_need"   => $request->amount_need,
        "goal"   => $request->goal,
        "volunteer_id"=>$request->volunteer_id,
        "about_crisis"=>$request->about_crisis,
        "image"         => $imageName,
    ]);

    Alert::toast()->success('Crisis created', 'success');
     return redirect()->route('index.crisis');

   }



   //report

   public function crisis_report(){

     return view('backend.pages.crisis.crisisReport');

   }


   public function crisis_search(Request $request){

    //dd($request->all());

    $request->validate([
      'from_date'=>'required|date',
      'to_date'=>'required|date|after:from_date'
  ]);

  $from=$request->from_date;
  $to=$request->to_date;

  $crisis=Crisis::whereBetween('created_at', [$from , $to])->get();

  //dd($crisis);

  return view('backend.pages.crisis.crisisReport',compact('crisis'));


  }

  public function frontend_crisis(){


    $crisis = Crisis::all();


    // Calculate the percentage for each crisis

    // foreach ($crisis as $crisisItem) {
    //     if ($crisisItem->amount_need > 0) {
    //         $crisisItem->percentage = ($crisisItem->amount_need / $crisisItem->goal) * 100;
    //     } else {
    //         $crisisItem->percentage = 0; // Set the percentage to 0 to avoid division by zero
       // }
    //}


    return view('frontend.pages.crisis',compact('crisis'));

  }

  public function crisis_details($id){

    $crisisDetails = Crisis::find($id);

    return view('frontend.pages.crisis.crisisdetails',compact('crisisDetails'));
  }


  public function crisis_edit($id){

    $crisis=Crisis::find($id);
     $crisisCategories=CrisisCategory::all();
     $volunteers=VolunteerUser::all();

     return view('backend.pages.crisis.editCrisis',compact('crisis','crisisCategories','volunteers'));

  }

  public function crisis_update(Request $request,$id){
    $crisis=Crisis::find($id);

    $imageName = null;
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $imageName = date('Ymdis').'.'.$file->extension();
      $file->storeAs('uploads', $imageName, 'public');

    }

    $crisis->update([
        "name"          => $request->name,
        "crisisCategory_id"=>$request->crisisCategory_id,
        "description"   => $request->description,
        "from_date"     => $request->from_date,
        "to_date"       => $request->to_date,
        "amount_need"   => $request->amount_need,
        "goal"   => $request->goal,
        "volunteerUser_id"=>$request->volunteerUser_id,
        "about_crisis"=>$request->about_crisis,
        "image"         => $imageName,

    ]);

    return redirect()->back();
}

public function crisis_delete($id){

    Crisis::destroy($id);

    Alert::toast()->error('Deleted');

    return back();
}

}
