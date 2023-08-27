@extends('backend.master')
@section('content')

<div class="mt-2 ml-4 mr-4">
    {{-- <div>
        @if(session()->has('message'))
        <p class="alert alert-success" style="font-size: 25px;text-align:center">{{session()->get('message')}}</p>
        @endif
    </div> --}}
    <h1 style="font-size: 50px">Purchase Report</h1>
    <br>
    <form action="{{route('show.Report')}}" method="post">
    @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="" style="font-size: 30px">From date:</label>
                <input value="{{request()->from_date}}" name="from_date" type="date" class="form-control">

            </div>
            <div class="col-md-4">
                <label for="" style="font-size: 30px">To date:</label>
                <input value="{{request()->to_date}}" name="to_date" type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>

    </form>
    <div id="orderReport">


        <h3 style="font-size: xx-large;">purchase Reports *{{request()->from_date}} - {{request()->to_date}}* </h3>

        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>             
      <th scope="col">Arms Name</th>
      <th scope="col">Quantity of Arms</th>
      <th scope="col">Price</th>
      
      <th scope="col">Vendor Name</th>
                     
                 </tr>
            </thead>
            <tbody>

                @if(isset($purchase))
                @foreach($purchase as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <th scope="row">{{$key+1}}</th>
                
                    <td>{{$item->armstype->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->vendor->name}}</td>
      
                    
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <br>
    <button onclick="printDiv('orderReport')" class="btn btn-primary ">Print</button>
</div>

    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    </div> 


@endsection