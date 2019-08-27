@extends('layout.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>View Report {{$report->id}} </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense-reports">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <h1>{{$report->title}}</h1>
        <div class="row">
            <div class="col">
                <h3>Details</h3>
                <table class="table" style="border: 1px">
                    <tr>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Amount</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($report->expenses as $expense)
                    <tr>
                    <th>{{$expense->description}}</th>
                    <th>{{$expense->created_at}}</th>
                    <th>$ {{$expense->amount}}</th>
                    <th><a href="/expense-reports/expenses/{{$expense->id}}/edit" class="btn btn-primary">Edit</a> </th>
                    <th><a href="/expense-reports/expenses/{{$expense->id}}/confirmDelete" class="btn btn-danger">Delete</a> </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense-reports/{{$report->id}}/expenses/create" class="btn btn-primary">Add expense</a>
    </div>
</div>
@endsection