<?php

namespace App\Http\Controllers;

use App\Models\Crisis;
use App\Models\Location;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\CssSelector\Node\FunctionNode;

class LocationController extends Controller
{

    public  function index(){
        $locations= Location::with('crisisLocation')->get();
        // dd($locations);
        return view('backend.pages.Locations.index', compact('locations'));
    }
    public function create(){

        $crisisData= Crisis::all();
        return view('backend.pages.Locations.create', compact('crisisData'));
    }
    public function store(Request $request){
        $request->validate([
            'crisis_id'=>'required',
            'location'=>'required',

        ]);
        Location::create([
            'crisis_id'=>$request->crisis_id,
            'location'=>$request->location,
        ]);
        return redirect()->back();
    }

    public function location_delete($id){

        Location::destroy($id);

        Alert::toast()->error('Deleted');

        return back();
    }
}
