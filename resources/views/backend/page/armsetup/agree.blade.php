@extends('backend.master')
@section('content')

<div class="container">
  <h2>Arms Setup</h2>
  <form action="{{route('Armsetup.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="name" name="name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Arms Setup Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div>
  
  <div class="form-group">
    <label for="">Specification</label>
    <input type="text" name="specification" class="form-control" id=""  placeholder="Enter specification of setup">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection