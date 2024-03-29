@extends('layout.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>New Report</h1>
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
           <form action="/expense-reports" method="POST">
            @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Type a Title" value="{{old('title')}}">
                </div>  
                    <button type="submit" class="btn btn-primary">Save Report</button>
           </form>
           <!-- Form -->
    </div>
</div>
@endsection