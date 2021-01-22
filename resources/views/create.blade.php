<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #FBCCB1;">
    <form action="{{route('song.create')}}" method = "POST" enctype = "multipart/form-data">
        @csrf
        <input action="text" name="Judul_Lagu" placeholder="Judul Lagu"> <br>
        <input action="text" name="Penyanyi" placeholder="Penyanyi"> <br>
        <input action="number" type="date" name="Tahun" placeholder="Tahun"> <br>
        <textarea name="Lirik" id="" cols="30" rows="10" placeholder="Lirik"></textarea><br>
        <input type="file" accept="image/png, image/jpeg, image/jpg, image/pdf" name="Photo" placeholder="Photo" id="Photo" ><br >
        <button type="submit">Submit</button> 
    </form>
</body>
</html>