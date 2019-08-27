@extends('layout.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Delete Expense {{$id}} </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense-reports">Back</a>
    </div>
</div>
<div class="row">
<div class="col">
           <!-- Form -->
           <form action="/expense-reports/expenses/{{$id}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete Expense {{$id}}</button>
           </form>
           <!-- Form -->
    </div>
</div>
@endsection