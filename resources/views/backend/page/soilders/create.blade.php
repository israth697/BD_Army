@extends('backend.master')
@section('content')

<div class="container">
  <h2>Soilders Information</h2>
<form action="{{route('soilders.store')}}" method="post" enctype="multipart/form-data">
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
    <label for="">Id_Number</label>
    <input type="number" name="id_number" class="form-control" id=""  placeholder="Enter your identity">
  </div>
  <div class="form-group">
    <label for="">Name</label>
    <input type="name" name="name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Soilder Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload your image">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" id=""  placeholder="Enter email">
  </div>
  <br>
  <div>
  <label for="">Rank</label>
  <select class="form-select" name="rank_id" aria-label="amrrrrr mon">
  <!-- <option selected>Open this select menu </option> -->
  @foreach ($rank as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
  </div>
  <br>
  <div class="form-group">
    <label for="">Corps</label>
    <select class="form-select" name="corps" aria-label="Default select example">
  <!-- <option selected>Selete the crops category</option> -->
  <option value="Signal">Signal</option>
  <option value="Education">Education</option>
  <option value="Engineer">Engineer</option>
  <option value="Medical">Medical</option>
  <option value="Architecture">Architecture</option>
  <option value="Training Officer">Training Officer</option>
</select>
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