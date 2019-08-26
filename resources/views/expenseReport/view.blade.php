@extends('layout.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>View Report #{{$report->id}} </h1>
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
    </div>
</div>
@endsection