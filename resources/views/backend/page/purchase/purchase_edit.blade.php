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
    <label for="">Arms Item Name</label>
    <input type="name" name="armstype_id" value="{{$purchase->armstype->name}}" class="form-control" id=""  placeholder="Arms Item name">
  </div><br>
  <div class="form-group">
    <label for="">Arms Quantity</label>
    <input type="number" name="quantity" value="{{$purchase->quantity}}" class="form-control" id=""  placeholder="Arms Quantity">
  </div><br>
  <div class="form-group">
    <label for="">Arms Quantity</label>
    <input type="number" name="price" value="{{$purchase->price}}" class="form-control" id=""  placeholder="Arms Quantity">
  </div><br>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection