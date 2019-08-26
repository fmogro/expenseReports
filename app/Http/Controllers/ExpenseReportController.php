<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseReport;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index',[
            'expenseReports'=>ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData  = $request->validate([
            'title'=>'required|min:3|max:10'
        ]);
        

        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();
        return redirect('/expense-reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expenseReport.view',['report'=>$expenseReport]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseReport $expenseReport)
    {
        return view('expenseReport.edit',['report'=>$expenseReport]);
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
            'title'=>'required|min:3|max:10'
        ]);
        
        $report = ExpenseReport::findOrFail($id);
        $report->title = $request->get('title');
        $report->save();
        return redirect('/expense-reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();
        return redirect('/expense-reports');
    }


    /**
     * Return View for delete record.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmDelete($id){
        return view('expenseReport.confirmDelete',['id'=>$id]);
    }
    
}
