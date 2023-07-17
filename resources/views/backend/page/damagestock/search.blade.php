@extends('backend.master')
@section('content')

<div class="container">
  <h2>Damage weapon</h2>
  <form action="{{route('weapon.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="">Amount</label>
    <input type="number" name="amount" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Purpose</label>
    <input type="text" name="purpose" class="form-control" id=""  placeholder="Enter the purpose">
  </div>
  <div class="form-group">
    <label for="">Date Of Submition</label>
    <input type="date" name="submition" class="form-control" id=""  placeholder="Enter submition of date">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection