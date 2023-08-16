@extends('backend.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data View Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .data-item {
            margin-bottom: 15px;
        }

        .data-label {
            font-weight: bold;
        }

        .data-value {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mb-3" style="text-align: center">Rank Information</h2>
        <hr>
        <div class="data-item">
            <span class="data-label">Image:</span>
            <img style="height: 90px;width:60px" src="{{url('/uploads/',$rank->image)}}" alt="">
        </div>
        <div class="data-item">
            <span class="data-label">Rank Name:</span>
            <span class="data-value">{{$rank->name}}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Rank Status:</span>
            <span class="data-value">{{$rank->status}}</span>
        </div>
        
        <!-- Add more data items as needed -->
    </div>
</body>

</html>
    
@endsection