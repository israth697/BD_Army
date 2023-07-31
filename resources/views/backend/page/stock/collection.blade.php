@extends('backend.master')
@section('content')

<div class="container">
  <h2>Stock collection</h2>
  <form action="{{route('weapon.store')}}" method="post">
  @csrf
  <br>
  <select class="form-select" name="id" aria-label="amrrrrr mon">
  <option selected>Open this select menu </option>
  @foreach ($armstype as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
<br>
<div class="form-group">
    <label for="">Type Quantity</label>
    <input type="number" name="type_quantity" class="form-control" id=""  placeholder="Enter Quantity">
  </div>
  <br>
<br>
<select class="form-select" name="id" aria-label="amrr mon">
  <option selected>Open this select menu </option>
  @foreach ($armsetup as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
<br>
  <div class="form-group">
    <label for="">Setup Quantity</label>
    <input type="number" name="setup_quantity" class="form-control" id=""  placeholder="Enter Quantity">
  </div>
  <br>
 
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection