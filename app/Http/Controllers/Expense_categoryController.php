<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Expense_category;
use RealRashid\SweetAlert\Facades\Alert;

class Expense_categoryController extends Controller
{
    public function index(){
        $expense = Expense_category::all();
        return view('backend.pages.expense_categories.index',compact('expense'));
    }
    public function create(){
        return view('backend.pages.expense_categories.create_expense_category');
    }
          public function store(Request $request ){
            $request->validate([
                'name'=>'required',
                'description'=>'required'
              ]);
    Expense_category::create([
        // clm name=>$request->inpt fld
        "name" => $request->name,
        "description" => $request->description
    ]);

    return redirect()->route('index.expense_categories');
    }
    public function expense_cat_delete($id){

        Expense_category::destroy($id);

        Alert::toast()->error('Deleted');

        return back();
    }


    Public function expense_cat_edit($id){

        $expense_category=Expense_category::find($id);


        return view('backend.pages.expense_categories.editExpenseCategory',compact('expense_category'));

        }

        public function expense_category_update(Request $request,$id){
         $expense_category=Expense_category::find($id);
         $expense_category->update([


            "name" => $request->name,
            "description" => $request->description



         ]);
         return back();




        }



    }



