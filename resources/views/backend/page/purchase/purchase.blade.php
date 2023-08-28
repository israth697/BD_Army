@extends('backend.master')
@section('content')

<div class="container">
    <h2>Purchase</h2>
    <br>
    <a class="btn btn-success" href="{{route('tender')}}">Add Purchase Details</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Arms Item Name</th>
      <th scope="col">Quantity of Arms</th>
      <th scope="col">Price</th>
      
      <th scope="col">Vendor Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($purchase as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->armstype->name}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->price}}</td>
      
      <td>{{$item->vendor->name}}</td>
      
   
<td>

<a class="btn btn-info" href="{{route('tender.view',$item->id)}}">View</a>
<!-- <a class="btn btn-warning" href="{{route('Purchase.edit',$item->id)}}">Edit</a> -->
<a class="btn btn-danger" href="{{route('Purchase.delete',$item->id)}}">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$purchase->links()}}

</div>

@endsection