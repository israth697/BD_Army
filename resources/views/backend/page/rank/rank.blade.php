@extends('backend.master')
@section('content')

<div class="container">
    <h2>Rank</h2>
    <br>
    <a class="btn btn-success" href="{{route('rank.post')}}">Create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rank as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img width="100px" src="{{url('/uploads/'.$item->image)}}" alt="">
      </td>
      <td>{{$item->name}}</td>
      
   
<td>
<a class="btn btn-success" href="">Edit</a>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>




</div>

@endsection