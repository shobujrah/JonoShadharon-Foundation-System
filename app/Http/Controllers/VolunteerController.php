<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Crisis;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Models\VolunteerUser;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class VolunteerController extends Controller
{
    public function index(){
        // $volunteers =VolunteerUser::paginate(5);
        $volunteers=User::paginate(5);
        return view('backend.pages.volunteer.index',compact('volunteers'));
    }
    public function create_volunteer(){
        $crisis=Crisis::all();
        return view('backend.pages.volunteer.create',compact('crisis'));
    }
    public function add_volunteer(){
        return view('backend.pages.volunteer.add_volunteer');
    }
    public function volunteer_store(Request $request){
        // dd($request->all());
        // $validate = request()->validate([
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'contact'=>'required|',
        //     'address'=>'required|numeric|min:11'
        // ]);


        $validate = Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required|email',
                'contact'=>'required|digits:11|regex:/(01)[0-9]{9}/',
                'address'=>'required'
            ]);

        if ($validate->fails())
        {
            Alert::toast()->warning('Something went wrong', 'Failed');

            return redirect()->back();
        }
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->contact,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'role'=>'volunteer',
        ]);
        return to_route('index.volunteer')->with('message','Data added successfully !!!');


    }




    public function store_volunteer (Request $request){
        /* $request->validate([
            'name'=>'required',
            'address'=>'required',
            'email' => 'string | email | unique:users',
            'phone'=>'required|numeric|min:11'
          ]); */

          $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:volunteers|max:50',
            'address' => 'required',
            'phone' => 'required|numeric|min:11' ,
        ]);

        if ($validator->fails()) {
            Alert::toast()->warning('Something went wrong', 'Failed');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($request->all());

        Volunteer::create([
        "name"              => $request->name,
        "address"           => $request->address,
        "email"             => $request->email,
        "volunteer_id"       =>$request->volunteer,
        "phone"             => $request->phone



        ]);


        return redirect()->route('index.volunteer');

    }


    public function volunteer_delete($id){

        User::destroy($id);

        Alert::toast()->error('Deleted');

        return back();
    }



    public function volunteer_info(){
       //  dd('volunteers');
        //$volunteers = Volunteer::all();
        $volunteers=User::where('role','volunteer')->get();
        return view('frontend.pages.volunteers.volunteerinfo',compact('volunteers'));

    }
}
