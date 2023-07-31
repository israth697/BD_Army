@extends('backend.master')
@section('content')

<div class="container">
    <h2>Damage List</h2>
    <br>
    <a class="btn btn-success" href="{{route('damage.search')}}">Create</a>
 <br>
<table class="table">
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Amount</th>
      <th scope="col">Purpose</th>
      <th scope="col">Submition</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($damagestock as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->amount}}</td>
      <td>{{$item->purpose}}</td>
      <td>{{$item->submition}}</td>
      
   
<td>
<a class="btn btn-warning" href="">Update</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$damagestock->links()}}


</div>

@endsection