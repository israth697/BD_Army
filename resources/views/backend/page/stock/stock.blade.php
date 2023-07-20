@extends('backend.master')
@section('content')

<div class="container">
    <h2>Arms Stock</h2>
    <br>
    <a class="btn btn-success" href="{{route('weapon.collection')}}">Create</a>
 <br>
<table class="table">
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($stock as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->status}}</td>
   
<td>
<a class="btn btn-success" href="">Edit</a>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach

  </tbody>
</table>

{{$stock->links()}}


</div>

@endsection