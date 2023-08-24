@extends('backend.master')
@section('content')
<div class="container">
  <h2>Purchase Details</h2><br>
<form action="{{route('Purchase.update',$purchase->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Purchase Name</label>
    <input type="name" name="name" value="{{$purchase->name}}" class="form-control" id=""  placeholder="purchase name">
  </div><br>

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