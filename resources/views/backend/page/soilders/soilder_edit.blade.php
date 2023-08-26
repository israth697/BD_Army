@extends('backend.master')
@section('content')
<div class="container">
  <h2>Rank Details</h2><br>
<form action="{{route('soilders.update',$soilder->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Soilder Image</label><br>
    <img style="height: 90px;width:60px" src="{{url('/uploads/',$soilder->image)}}" alt="">
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div><br>
  <div class="form-group">
    <label for="">Soilder ID</label>
    <input type="id_number" name="id_number" value="{{$soilder->id}}" class="form-control" id=""  placeholder="soilder ID">
  </div><br>
  <div class="form-group">
    <label for="">Soilder Name</label>
    <input type="name" name="name" value="{{$soilder->name}}" class="form-control" id=""  placeholder="soilder name">
  </div><br>
  <div class="form-group">
    <label for="">Soilder Email</label>
    <input type="email" name="email" value="{{$soilder->email}}" class="form-control" id=""  placeholder="soilder email">
  </div><br>
  <div class="form-group">
    <label for="">Soilder Contact</label>
    <input type="tel" name="contact" value="{{$soilder->contact}}" class="form-control" id=""  placeholder="soilder Contact">
  </div><br>
  <div class="form-group">
    <label for="">Soilder Address</label>
    <input type="text" name="address" value="{{$soilder->address}}" class="form-control" id=""  placeholder="soilder Address">
  </div><br>
  <div class="form-group">
  <label for="">Soilders Status</label>
  <select class="form-select" value="{{$soilder->status}}" name="status" aria-label="Default select example">
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>
 </div><br>
 <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection