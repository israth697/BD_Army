@extends('backend.master')
@section('content')

<div class="container">
    <h2>Officer Command</h2>
    <br>
    <a class="btn btn-success" href="{{route('officer.fire')}}">Create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
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
      <td>{{$item->status}}</td>
      <td>{{$item->firingnotice}}</td>
      
   
<td>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$officer->links()}}

</div>

@endsection