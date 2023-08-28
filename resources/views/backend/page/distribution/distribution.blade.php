@extends('backend.master')
@section('content')

<div class="container">
    <h2>Distributor</h2>
    <br>
    <a class="btn btn-success" href="{{route('distribution.collection')}}">Add Distribution Details</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Arms Item Name</th>
      <th scope="col">Duty Officer Name</th>
      <th scope="col">Quantity of Arms</th>
      <th scope="col">Purpose</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($distribution as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->armstype->name}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->purpose}}</td>
      
      
   
<td>

<a class="btn btn-info" href="{{route('distribution.view',$item->id)}}">View</a>
<!-- <a class="btn btn-warning" href="{{route('distribution.edit',$item->id)}}">Edit</a> -->
<a class="btn btn-danger" href="{{route('distribution.delete',$item->id)}}">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$distribution->links()}}

</div>

@endsection