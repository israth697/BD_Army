@extends('backend.master')
@section('content')
<div class="container">
  <h2>Officer Update</h2><br>
<form action="{{route('officer.update',$officer->id)}}" method="post" enctype="multipart/form-data">
@if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
  @csrf
  <div class="form-group">
    <label for="">Officer Name</label>
    <input type="name" name="name" value="{{$officer->name}}" class="form-control" id=""  placeholder="officer name">
  </div><br>
  <div class="form-group">
    <label for="">Officer Email</label>
    <input type="email" name="email" value="{{$officer->email}}" class="form-control" id=""  placeholder="officer email">
  </div><br>
  <div class="form-group">
    <label for="">Firing Notice</label>
    <input type="text" name="firingnotice" value="{{$officer->firingnotice}}" class="form-control" id=""  placeholder="officer name">
  </div><br>

  <div class="form-group">
  <label for="">Officer Status</label>
  <select class="form-select" value="{{$officer->status}}" name="status" aria-label="Default select example">
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>`  
 </div><br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection