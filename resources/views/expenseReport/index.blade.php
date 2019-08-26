@extends('layout.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Reports</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="/expense-reports/create">Create a new Report</a>
    </div>
</div>


<div class="row">
    <div class="col">
            <table class="table">
                @foreach($expenseReports as $expenseReport)
                    <tr>
                        <td>{{ $expenseReport->title }}</td>
                        <td> <a href="/expense-reports/{{ $expenseReport->id }}" class="btn btn-primary">View</a> </td>
                        <td> <a href="/expense-reports/{{ $expenseReport->id }}/edit" class="btn btn-primary">Edit</a> </td>
                        <td> <a href="/expense-reports/{{ $expenseReport->id }}/confirmDelete" class="btn btn-danger">Delete</a> </td>
                    </tr>
                @endforeach
           </table>
    </div>
</div>
@endsection