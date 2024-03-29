@extends('backend.master')
@section('content')

<div class="container">
    <h2>Rank</h2>
    <br>
    <a class="btn btn-success" href="{{route('rank.post')}}">Add New rank</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Arms Type Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rank as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img width="50px";height="50px"; src="{{url('/uploads/'.$item->image)}}" alt="">
      </td>
      <td>{{$item->name}}</td>
      <td>{{$item->armstype->name}}</td>
      <td>{{$item->status}}</td>
      
   
<td>
  
  <a class="btn btn-info" href="{{route('rank.view',$item->id)}}">View</a>
<!-- <a class="btn btn-warning" href="{{route('rank.edit',$item->id)}}">Edit</a>
<a class="btn btn-danger" href="{{route('rank.delete',$item->id)}}">Delete</a> -->
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>


{{$rank->links()}}

</div>

@endsection