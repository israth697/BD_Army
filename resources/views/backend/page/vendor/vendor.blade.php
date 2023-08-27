@extends('backend.master')
@section('content')

<div class="container">
    <h2>Vendor</h2>
    <br>
    <a class="btn btn-success" href="{{route('vendor.list')}}">Add Vendor Details</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($vendor as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->contact}}</td>
      <td>{{$item->address}}</td>
      
   
<td>
<a class="btn btn-info" href="{{route('vendor.view',$item->id)}}">View</a>
<a class="btn btn-warning" href="{{route('vendor.edit',$item->id)}}">Edit</a>
<a class="btn btn-danger" href="{{route('vendor.delete',$item->id)}}">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$vendor->links()}}


</div>

@endsection