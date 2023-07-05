@extends('backend.master')
@section('content')
<div class="container">
  <h2>Rank Details</h2>
<form action="{{route('rank.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Rank Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div>
  <div class="form-group">
    <label for="">Rank Name</label>
    <input type="name" name="name" class="form-control" id=""  placeholder="rank name">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection