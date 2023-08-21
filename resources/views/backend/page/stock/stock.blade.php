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
      <th scope="col">Arms Item Name</th>
      <th scope="col">Item Quantity</th>
      <th scope="col">Arms Setup Name</th>
      <th scope="col">Setup Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($stock as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->armstype->name}}</td>
      <td>{{$item->type_quantity}}</td>
      <td>{{$item->armsetup->name}}</td>
      <td>{{$item->setup_quantity}}</td>
      <td>{{$item->status}}</td>
   
<td>
<a class="btn btn-success" href="{{route('stock.view',$item->id)}}">View</a>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="{{route('weapon.delete',$item->id)}}">Delete</a>
</td>
</tr>
    @endforeach

  </tbody>
</table>

{{$stock->links()}}


</div>

@endsection