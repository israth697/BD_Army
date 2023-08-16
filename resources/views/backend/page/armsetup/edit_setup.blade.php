@extends('backend.master')
@section('content')

<div class="container">
  <h2>Arms Setup</h2>
  <form action="{{route('arms.setup.update',$armsetup->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="name" name="name" value="{{$armsetup->name}}" class="form-control" id=""  placeholder="Enter name">
  </div>
  <!-- <div class="form-group">
    <label for="">Arms Setup Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div> -->
  
  <div class="form-group">
    <label for="">Specification</label>
    <input type="text" name="specification" value="{{$armsetup->specification}}" class="form-control" id=""  placeholder="Enter specification of setup">
  </div>
  <!-- <br>
  <label for="">Arms Type</label>
  <select class="form-select" name="armstype_id" aria-label="amrrrrr mon">
  <option selected value="">Selete The Arms Type</option>
  <option  value=""></option>
</select> -->
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection