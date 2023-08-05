@extends('backend.master')
@section('content')

<div class="container">
  <h2>Arms Setup</h2>
  <form action="{{route('Armsetup.store')}}" method="post" enctype="multipart/form-data">
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
    <label for="">Arms Setup Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div>
  
  <div class="form-group">
    <label for="">Specification</label>
    <input type="text" name="specification" class="form-control" id=""  placeholder="Enter specification of setup">
  </div>
  <br>
  <label for="">Arms Type</label>
  <select class="form-select" name="armstype_id" aria-label="amrrrrr mon">
  <option selected>Selete The Arms Type</option>
  @foreach ($armstype as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection