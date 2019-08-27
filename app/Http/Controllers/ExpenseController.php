<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseReport;
use App\Expense;


class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense.create',['report'=>$expenseReport]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ExpenseReport $expenseReport)
    {
       $validData  = $request->validate([
            'description'=>'required|min:3',
            'amount'=>'required|integer|min:1'
        ]);
        
        $expense = new Expense();
        $expense->description=$request->get('description');
        $expense->amount=$request->get('amount');
        $expense->expense_report_id= $expenseReport->id;
        $expense->save();
        return redirect('/expense-reports/'.$expenseReport->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expenseReport)
    {
        return view('expense.update',['report'=>$expenseReport]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validData  = $request->validate([
            'description'=>'required|min:3',
            'amount'=>'required|min:1'
        ]);
        $expense = Expense::findOrFail($id);
        $expense->description=$request->get('description');
        $expense->amount=$request->get('amount');
        $expense->expense_report_id= $expense->expense_report_id;
        $expense->save();
        return redirect('/expense-reports/'.$expense->expense_report_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Expense::findOrFail($id);
        $report->delete();
        return redirect('/expense-reports/'.$report->expense_report_id);
    }

    public function confirmDelete($id){
        return view('expense.confirmDelete',['id'=>$id]);
    }
}
