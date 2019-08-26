@extends('layout.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Edit Report {{$report->id}}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense-reports">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
           <!-- Form -->
           <form action="/expense-reports/{{$report->id}}" method="POST">
            @csrf
            @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$report->title}}" placeholder="Type a Title">
                </div>  
                    <button type="submit" class="btn btn-primary">Save Report {{$report->id}}</button>
           </form>
           <!-- Form -->
    </div>
</div>
@endsection