@extends('layouts.master')

@section('title')

  RegisterPage

@endsection

@section('subject')

 Register

@endsection


@section('content')

@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error )
<li>{{$error}}</li>

@endforeach
@endif

</ul>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <div id="emailHelp" class="form-text">  </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">  </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">  </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Config</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">  </div>
  </div>

  <button type="submit" class="btn btn-primary" value = "Add laravel"/>Submit</button>
</form>
@endsection
