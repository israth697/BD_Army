@extends('backend.master')
@section('content')
<div class="container">
  <h2>Purchase Details</h2>
  <form action="{{route('Purchase.store')}}" method="post">
  @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
  @csrf
  <!-- <div class="form-group">
    <label for="">Arms Name</label>
    <select class="form-select" name="name" aria-label="Default select example">
  <option selected>Selete the Arms Category</option>
  <option value="Browning Hi Power">Browning Hi Power</option>
  <option value="QSZ 92">QSZ 92</option>
  <option value="Bersa Thunder 9">Bersa Thunder 9</option>
  <option value="Type 57">Type 57</option>
  <option value="KRISS Vector Gen II">KRISS Vector Gen II</option>
  <option value="Heckler & Koch MP5">Heckler & Koch MP5</option>
  <option value="BD-08">BD-08</option>
  <option value="Type 56">Type 56</option>
  <option value="AK-15">AK-15</option>
  <option value="M4 Carbine">M4 Carbine</option>
  <option value="Type 56 Carbine">Type 56 Carbine</option>
  <option value="Zastava M59/66">Zastava M59/66</option>
  <option value="BD-15">BD-15</option>
  <option value="RPD">RPD</option>
  <option value="Type 80">Type 80</option>
  <option value="DShK">DShK</option>
  <option value="AX308">AX308</option>
  <option value="SC-76 Thunderbolt">SC-76 Thunderbolt</option>
  <option value="Pindad SPR">Pindad SPR</option>
  <option value="RPA Rangemaster">RPA Rangemaster</option>
  <option value="Dragunov sniper rifle">Dragunov sniper rifle</option>
  
</select>
  </div> -->

  <br>
  <select class="form-select" name="armstype_id" aria-label="amrrrrr mon">
  <option selected>Select the Arms Type </option>
  @foreach ($armstype as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>

  <div class="form-group">
    <label for="">Quantity</label>
    <input type="number" name="quantity" class="form-control" id=""  placeholder="Enter quantity">
  </div>
  <div class="form-group">
    <label for="">Price</label>
    <input type="number" name="price" class="form-control" id=""  placeholder="Enter Price">
  </div>
  
  <div>
  <br>
  <label for="">Vendor Name</label>
  <select class="form-select" name="vendor_id" aria-label="amrrrrr mon">
  <option selected value="null">Selete The Vendor Name</option>
  @foreach ($vendor as $item )
  <option  value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>
<br>
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection