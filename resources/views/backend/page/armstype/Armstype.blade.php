@extends('backend.master')
@section('content')

<div class="container">
    <h2>Arms Type</h2>
    <br>
    <a class="btn btn-success" href="{{route('submit')}}">Create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($armstype as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>
        <img width="50px";height="50px"; src="{{url('/uploads/'.$item->image)}}" alt="">
      </td>
      <td>{{$item->status}}</td>
      <td>{{$item->description}}</td>
      
   
<td>
<a class="btn btn-success" href="">Edit</a>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$armstype->links()}}


</div>

@endsection