@extends('backend.master')
@section('content')

<div class="container">
  <h2>Stock list</h2>
  <form action="{{route('weapon.store')}}" method="post">
  @csrf
  
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection