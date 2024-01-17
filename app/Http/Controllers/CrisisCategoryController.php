<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrisisCategory;
use RealRashid\SweetAlert\Facades\Alert;

class CrisisCategoryController extends Controller
{

   public function index(){
    $catData= CrisisCategory::all();
    return view('backend.pages.crisisCategories.index',compact('catData')) ;
   }

   public function create(){

    return view('backend.pages.crisisCategories.create');
   }

   public  function store(Request  $request){
// dd($request->all());
    $request->validate([
        'name'=>'required'
    ]);

    CrisisCategory::create([
        'name'=>$request->name,
    ]);
    return redirect()->back();

   }

   public function crisis_category_edit($id){

    $catData=CrisisCategory::find($id);


     return view('backend.pages.crisisCategories.editCrisisCategory',compact('catData'));

  }

  public function crisis_category_update(Request $request,$id){
    $catData=CrisisCategory::find($id);

    $catData->update([
        "name"          => $request->name,

    ]);

    return redirect()->back();
}


public function crisis_category_delete($id){

    CrisisCategory::destroy($id);

    Alert::toast()->error('Deleted');

    return back();
}



}
