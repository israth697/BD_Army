@extends('backend.master')
@section('content')
<div class="container">
  <h2>Purchase Details</h2><br>
<form action="{{route('Purchase.update',$purchase->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Purchase Name</label>
    <input type="name" name="name" value="{{$purchase->name}}" class="form-control" id=""  placeholder="purchase name">
  </div><br>
  <div class="form-group">
    <label for="">Purchase Email</label>
    <input type="email" name="email" value="{{$purchase->email}}" class="form-control" id=""  placeholder="purchase email">
  </div><br>
  <div class="form-group">
    <label for="">Purchase Contact</label>
    <input type="tel" name="contact" value="{{$purchase->contact}}" class="form-control" id=""  placeholder="purchase contact">
  </div><br>
  <div class="form-group">
    <label for="">Purchase Address</label>
    <input type="text" name="address" value="{{$purchase->address}}" class="form-control" id=""  placeholder="purchase address">
  </div><br>
  <div class="form-group">
    <label for="">Purchase Details</label>
    <input type="text" name="details" value="{{$purchase->details}}" class="form-control" id=""  placeholder="purchase details">
  </div><br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection

