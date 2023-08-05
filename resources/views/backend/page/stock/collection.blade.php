@extends('backend.master')
@section('content')

<div class="container">
  <h2>Stock collection</h2>
  <form action="{{route('weapon.store')}}" method="post">
  @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
  @csrf
  <br>
  <label for="">Arms Type</label>
  <select class="form-select" name="id" aria-label="amrrrrr mon">
  <option selected>Selete the arms type</option>
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
<label for="">Arms Setup Type</label>
<select class="form-select" name="id" aria-label="amrr mon">
  <option selected>Selete the arms setup type</option>
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