@extends('backend.master')
@section('content')
<div class="container">
  <h2>Vendor Details</h2><br>
<form action="{{route('vendor.update',$vendor->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Vendor Name</label>
    <input type="name" name="name" value="{{$vendor->name}}" class="form-control" id=""  placeholder="vendor name">
  </div><br>
  <div class="form-group">
    <label for="">Vendor Email</label>
    <input type="email" name="email" value="{{$vendor->email}}" class="form-control" id=""  placeholder="vendor email">
  </div><br>
  <div class="form-group">
    <label for="">Vendor Contact</label>
    <input type="tel" name="contact" value="{{$vendor->contact}}" class="form-control" id=""  placeholder="vendor contact">
  </div><br>
  <div class="form-group">
    <label for="">Vendor Address</label>
    <input type="text" name="address" value="{{$vendor->address}}" class="form-control" id=""  placeholder="vendor address">
  </div><br>

  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection