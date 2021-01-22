<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #FBCCB1;">
    <div style="width: 100; display: inline-block; margin-left: 500px;" >
        <img src="{{asset('storage/Photo/'.$data->Photo)}}" class="head" height="100" width="100" alt="view">
    </div>
    <div style="width: 100; display: inline-block; margin: 20px;">
        <h1>{{$data -> Judul_Lagu}}</h1>
        <p> {{$data -> Penyanyi}} </p> 
        <p> {{$data -> Tahun}} </p>
    </div>
    <br>
    <div style="width: 100; display: inline-block; margin-left: 500px;">        
        <pre> {{$data -> Lirik}} </pre>
        <a href="{{route('home')}}">Back</a>
    </div>
</body>
</html>