@extends('backend.master')
@section('content')

<div class="container">
  <h2>Stock list</h2>
  <form action="{{route('weapon.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="">Id_Number</label>
    <input type="id_number" name="id_number" class="form-control" id=""  placeholder="Enter your identity">
  </div>
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
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection