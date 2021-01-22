<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #FBCCB1;">
    <form action="{{route('storelagu', $data -> id)}}" method = "POST">
        @csrf
        @method('patch')
        <input value="{{$data -> Judul_Lagu}}" action="text" name="Judul_Lagu" placeholder="Judul Lagu"> <br>
        <input value="{{$data -> Penyanyi}}" action="text" name="Penyanyi" placeholder="Penyanyi"> <br>
        <input value="{{$data -> Tahun}}" action="number" type="date" name="Tahun" placeholder="Tahun"> <br>
        <textarea value="{{$data -> Lirik}}" name="Lirik" id="" cols="30" rows="10" placeholder="Lirik"></textarea><br>
        <button type="submit">Submit</button> 
    </form>
</body>
</html>