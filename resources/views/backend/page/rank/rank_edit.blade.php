@extends('backend.master')
@section('content')
<div class="container">
  <h2>Rank Details</h2><br>
<form action="{{route('rank.update',$rank->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Rank Image</label><br>
    <img style="height: 90px;width:60px" src="{{url('/uploads/',$rank->image)}}" alt="">
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div><br>
  <div class="form-group">
    <label for="">Rank Name</label>
    <input type="name" name="name" value="{{$rank->name}}" class="form-control" id=""  placeholder="rank name">
  </div><br>
  <!-- <div class="form-group">
    <label for="">Arms Item</label>
    <input type="armstype_id" name="armstype_id" value="{{$rank->armstype}}" class="form-control" id=""  placeholder="Arms type name">
  </div><br> -->
  <div class="form-group">
  <label for="">Rank Status</label>
  <select class="form-select" value="{{$rank->status}}" name="status" aria-label="Default select example">
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>`  
 </div><br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection