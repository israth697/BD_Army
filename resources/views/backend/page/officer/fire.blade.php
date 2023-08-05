@extends('backend.master')
@section('content')
<div class="container">
  <h2>Firing Order</h2>
  <form action="{{route('officer.store')}}" method="post">
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
    <input type="text" name="name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" id=""  placeholder="Enter email">
  </div>
  <br>
  <div>
  <label for="">Rank</label>
  <select class="form-select" name="rank_id" aria-label="amrrrrr mon">
  <option selected>Select the rank</option>
  @foreach ($rank as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
  </div>
  <br>
  <div class="form-group">
    <label for="">Firing Notice</label>
    <input type="text" name="firingnotice" class="form-control" id=""  placeholder="Give firing order">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection