@extends('backend.master')
@section('content')

<div class="container">
  <h2>Damage weapon</h2>
  <form action="{{route('damage.store')}}" method="post">
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
  <select class="form-select" name="armstype_id" aria-label="amrrrrr mon">
  <option selected>Selet the arms type </option>
  @foreach ($armstype as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
  <div class="form-group">
    <label for="">Amount</label>
    <input type="number" name="amount" class="form-control" id=""  placeholder="Enter the amount">
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