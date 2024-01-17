<?php

namespace App\Http\Controllers;

use App\Models\Crisis;
use App\Models\Expense;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExpenseController extends Controller
{
    public function index_expense(){
        $expenses=Expense::with('crisis')->get();
        // dd($expenses);
        return view("backend.pages.expense.index",compact('expenses'));
    }

    public function create_expense(){
        $crisis=Crisis::all();
        return view("backend.pages.expense.create",compact('crisis'));
    }

    public function store_expense(Request $request){
            // dd($request->all());
            $request->validate([
                'crisis_id'=>'required',
                'amount'=>'required',
                'details'=>'required',
            ]);
        Expense::create([
         "crisis_id"     => $request->crisis_id,
         "amount"     => $request-> amount,
         "details"    => $request-> details

        ]);
           Alert::toast()->success('created successfully');
        return redirect()->back();



    }

    public function expense_edit($id){

        $expense=Expense::find($id);
        $crisis=Crisis::all();


         return view('backend.pages.expense.editExpense',compact('expense','crisis'));

      }

      public function expense_update( Request $request,$id){

     $expense=Expense::find($id);

     $expense->update([

        "crisis_id"     => $request->crisis_id,
        "amount"     => $request-> amount,
        "details"    => $request-> details

     ]);
     return redirect()->back();

      }

      public function expense_delete($id){

        Expense::destroy($id);

        Alert::toast()->error('Deleted');

        return back();
    }

}
