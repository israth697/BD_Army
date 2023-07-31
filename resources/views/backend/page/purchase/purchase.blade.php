@extends('backend.master')
@section('content')

<div class="container">
    <h2>Purchase</h2>
    <br>
    <a class="btn btn-success" href="{{route('tender')}}">Create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($purchase as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->contact}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->details}}</td>
      
   
<td>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$purchase->links()}}

</div>

@endsection