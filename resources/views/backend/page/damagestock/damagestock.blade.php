@extends('backend.master')
@section('content')

<div class="container">
    <h2>Damage List</h2>
    <br>
    <a class="btn btn-success" href="{{route('damage.search')}}">Add New Damage Stock</a>
 <br>
<table class="table">
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Arms Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Reason</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($damagestock as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
       <td>{{$item->armstype->name}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->reason}}</td>
      
      
   
<td>
<a class="btn btn-info" href="{{route('damage.view',$item->id)}}">Edit</a>
<!-- <a class="btn btn-warning" href="">Update</a> -->
<!-- <a class="btn btn-danger" href="{{route('damage.delete',$item->id)}}">Delete</a> -->
</td>
</tr>
    @endforeach
    
  </tbody>
</table>

{{$damagestock->links()}}


</div>

@endsection