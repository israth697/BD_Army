@extends('backend.master')
@section('content')
<div class="container">
  <h2>Firing Order</h2>
  <form action="{{route('officer.store')}}" method="post">
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
    <label for="">Firing Notice</label>
    <input type="text" name="firingnotice" class="form-control" id=""  placeholder="Give firing order">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection