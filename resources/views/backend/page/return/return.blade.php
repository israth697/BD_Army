@extends('backend.master')
@section('content')

<div class="container">
    <h2>Honourable Arms</h2>
    <br>
    <a class="btn btn-success" href="{{route('back.arms')}}">Add Honourable Arms </a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Officer Name</th>
      <th scope="col">Arms Type Name</th>
      <th scope="col">Rank</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
      
     
    </tr>
  </thead>
  <tbody>
    @foreach($armsreturn as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      
      <td>{{$item->name}}</td>
      <td>{{$item->armstype->name}}</td>
      <td>{{$item->rank->name}}</td>

      <td>{{$item->date}}</td>
      
      
   
<td>
  
<a class="btn btn-info" href="{{route('return.view',$item->id)}}">View</a>

</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>


{{$armsreturn->links()}}

</div>

@endsection