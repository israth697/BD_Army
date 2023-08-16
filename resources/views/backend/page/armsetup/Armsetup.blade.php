@extends('backend.master')
@section('content')
<div class="container">
    <h2>Arms Setup</h2>
    <br>
    <a class="btn btn-success" href="{{route('agree')}}">Create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Specification</th>
      <th scope="col">Arms Type Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($armsetup as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>
        <img width="50px";height="50px"; src="{{url('/uploads/'.$item->image)}}" alt="">
      </td>
      <td>{{$item->status}}</td>
      <td>{{$item->specification}}</td>
      <td>{{$item->armstype->name}}</td>
   
<td>
<a class="btn btn-warning" href="{{route('arms.setup.edit',$item->id)}}">Edit</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$armsetup->links()}}


</div>
@endsection