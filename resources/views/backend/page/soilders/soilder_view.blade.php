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
        <h2 class="mb-3" style="text-align: center">Soilders Information</h2>
        <hr>
        <div class="data-item">
            <span class="data-label">Soilder Image:</span>
            <img style="height: 90px;width:60px" src="{{url('/uploads/',$soilder->image)}}" alt="">
        </div>
        <div class="data-item">
            <span class="data-label">Soilder ID Number:</span>
            <span class="data-value">{{$soilder->id_number}}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Soilder Name:</span>
            <span class="data-value">{{$soilder->name}}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Soilder Email:</span>
            <span class="data-value">{{$soilder->email}}</span>
        </div>
        <div class="data-item">
            <span class="data-label"> Rank:</span>
            <span class="data-value">{{$soilder->rank->name}}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Soilder Corps:</span>
            <span class="data-value">{{$soilder->corps}}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Soilder Contact:</span>
            <span class="data-value">{{$soilder->contact}}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Soilder Address:</span>
            <span class="data-value">{{$soilder->address}}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Soilder Status:</span>
            <span class="data-value">{{$soilder->status}}</span>
        </div>
        
        <!-- Add more data items as needed -->
    </div>
</body>

</html>
    
@endsection