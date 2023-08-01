@extends('backend.master')
@section('content')

<div class="container">
    <h2>Soilders List</h2>
    <br>
    <a class="btn btn-success" href="{{route('soilders.create')}}">Create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Id Number</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Rank</th>
      <th scope="col">Corps</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($soilder as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->id_number}}</td>
      <td>{{$item->name}}</td>
      <td>
        <img width="50px";height="50px"; src="{{url('/uploads/'.$item->image)}}" alt="">
      </td>
      <td>{{$item->email}}</td>
      <td>{{$item->rank->name}}</td>
      <td>{{$item->corps}}</td>
      <td>{{$item->contact}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->status}}</td>
   
<td>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$soilder->links()}}


</div>

@endsection