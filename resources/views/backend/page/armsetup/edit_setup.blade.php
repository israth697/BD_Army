@extends('backend.master')
@section('content')
<div class="container">
  <h2>Arms Setup Details</h2><br>
<form action="{{route('arms.setup.update',$armsetup->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Arms Setup Image</label><br>
    <img style="height: 90px;width:60px" src="{{url('/uploads/',$armsetup->image)}}" alt="">
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div><br>
  <div class="form-group">
    <label for="">Armsetup Name</label>
    <input type="name" name="name" value="{{$armsetup->name}}" class="form-control" id=""  placeholder="armsetup name">
  </div><br>
  <div class="form-group">
    <label for="">Specification</label>
    <input type="text" name="specification" value="{{$armsetup->specification}}" class="form-control" id=""  placeholder="armsetup specification">
  </div><br>
  <div class="form-group">
  <label for="">Arms Setup Status</label>
  <select class="form-select" value="{{$armsetup->status}}" name="status" aria-label="Default select example">
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>
 </div><br>
<button type="submit" class="btn btn-success">Update</button>
</form>
</div>

@endsection