@extends('backend.master')
@section('content')

<div class="container">
  <h2>Arms Item Details</h2>
  @if($errors->any())

        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
<form action="{{route('Armstype.update)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="name" name="name" value="{{$armstype->name}}" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Arms Item Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="description" value="{{$armstype->description}}" class="form-control" id=""  placeholder="Enter the weapon description">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection