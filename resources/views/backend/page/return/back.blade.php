@extends('backend.master')
@section('content')
<div class="container">
  <h2>Reutrn Details</h2>
<form action="{{route('return.store')}}" method="post" enctype="multipart/form-data">
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
    <label for="">Officer Name</label>
    <input type="name"  name="name" class="form-control" id=""  placeholder="rank name">
  </div>
  
  <br>
  <select class="form-select" name="armstype_id" aria-label="amrrrrr mon">
  <option selected>Select the Arms Type </option>
  @foreach ($armstype as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
<br>
  <div>
  <label for="">Rank</label>
  <select class="form-select" name="rank_id" aria-label="amrrrrr mon">
  <option selected>Open this select menu </option>
  @foreach ($rank as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
  </div>
  <br>
<div class="form-group">
    <label for="">Submission Date</label>
    <input type="date"  name="date" class="form-control" id=""  placeholder="submission date">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection