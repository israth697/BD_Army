@extends('backend.master')
@section('content')
<div class="container">
  <h2>Purchase Details</h2>
  <form action="{{route('Purchase.store')}}" method="post">
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
    <label for="">Name</label>
    <input type="name" name="name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" id=""  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="">Contact</label>
    <input type="tel" name="contact" class="form-control" id=""  placeholder="Enter contact">
  </div>
  <div class="form-group">
    <label for="">Address</label>
    <input type="text" name="address" class="form-control" id=""  placeholder="Enter address">
  </div>
  <div class="form-group">
    <label for="">Details</label>
    <input type="text" name="details" class="form-control" id=""  placeholder="Enter details">
  </div>
  <div>
  <br>
  <label for="">Vendor Name</label>
  <select class="form-select" name="vendor_id" aria-label="amrrrrr mon">
  <option selected value="null">Selete The Vendor Name</option>
  @foreach ($vendor as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection