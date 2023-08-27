@extends('backend.master')
@section('content')
<div class="container">
  <h2>Distribution  Details</h2><br>
<form action="{{route('distribution.update',$distribution->id)}}" method="post" enctype="multipart/form-data">
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
    <input type="name" name="armstype_id" value="{{$distribution->armstype->name}}" class="form-control" id=""  placeholder="Arms Item name">
  </div><br>
  <div class="form-group">
    <label for="">Arms Quantity</label>
    <input type="number" name="quantity" value="{{$distribution->quantity}}" class="form-control" id=""  placeholder="Arms Quantity">
  </div><br>
  <div class="form-group">
    <label for="">Duty Officer Name</label>
    <input type="name" name="name" value="{{$distribution->name}}" class="form-control" id=""  placeholder="Duty Officer Name">
  </div><br>
  <div class="form-group">
    <label for="">Purpose</label>
    <input type="text" name="purpose" value="{{$distribution->purpose}}" class="form-control" id=""  placeholder="Arms Purpose">
  </div><br>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection


