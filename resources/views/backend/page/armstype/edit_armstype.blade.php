@extends('backend.master')
@section('content')
<div class="container">
  <h2>Arms Item Details</h2><br>
<form action="{{route('Armstype.update',$armstype->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Arms Item Image</label><br>
    <img style="height: 90px;width:60px" src="{{url('/uploads/',$armstype->image)}}" alt="">
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div><br>
  <div class="form-group">
    <label for="">Arms Item Name</label>
    <input type="name" name="name" value="{{$armstype->name}}" class="form-control" id=""  placeholder="armstype name">
  </div><br>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="description" value="{{$armstype->description}}" class="form-control" id=""  placeholder="armstype specification">
  </div><br>

<div class="form-group">
  <label for="">Arms Item Status</label>
  <select class="form-select" value="{{$armstype->status}}" name="status" aria-label="Default select example">
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>
 </div><br>
<button type="submit" class="btn btn-success">Update</button>
</form>
</div>

@endsection