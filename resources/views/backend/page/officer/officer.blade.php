@extends('backend.master')
@section('content')

<div class="container">
    <h2>Officer Command</h2>
    <br>
    <a class="btn btn-success" href="{{route('officer.fire')}}">Give Firing Notice</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Rank</th>
      <th scope="col">Status</th>
      <th scope="col">Firingnotice</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($officer as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->rank->name}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->firingnotice}}</td>
      
   
<td>
<a class="btn btn-info" href="{{route('officer.view',$item->id)}}">View</a>
<a class="btn btn-warning" href="{{route('officer.edit',$item->id)}}">Edit</a>
<a class="btn btn-danger" href="{{route('officer.delete',$item->id)}}">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$officer->links()}}

</div>

@endsection