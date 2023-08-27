@extends('backend.master')
@section('content')

<div class="container">
  <h2>Damage weapon</h2>
  <form action="{{route('damage.store',)}}" method="post">
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
  <label for="">Arms Item</label>
  <select class="form-select" name="armstype_id" aria-label="amrrrrr mon">
  <option selected>Selet the arms item </option>
  @foreach ($armstype as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
  <div class="form-group">
    <label for="">Quantity</label>
    <input type="number" name="quantity" class="form-control" id=""  placeholder="Enter the quantity">
  </div>
  <div class="form-group">
    <label for="">Reason</label>
    <input type="name" name="reason" class="form-control" id=""  placeholder="Enter the reason">
  </div>
  
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection