@extends('backend.master')
@section('content')

<div class="container">
  <h2>Arms Type Details</h2>
  <form action="{{route('Armstype.store')}}" method="post" enctype="multipart/form-data">
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
    <input type="name" name="name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Arms Type Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="description" class="form-control" id=""  placeholder="Enter the weapon description">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection