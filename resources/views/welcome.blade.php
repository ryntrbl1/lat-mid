<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: #FBCCB1;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List Lagu</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
        </style>
    </head>
    <body style="background-color: #FBCCB1;">
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 0px;" style="background-color: #FBCCB1;">
  <div class="container-fluid"style="background-color: #CE8054;">
    <a class="navbar-brand" style="font-style: italic;">LYRICS</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" style="border-color: #233342; color: #233342;" type="submit">Search</button>
    </form>
  </div>
    </nav>
  <h1 style="text-align: center; margin-top: 0px;">List Lagu</h1>
  <a href="{{route('namalagu')}}" style="margin-left: 15px;" style="color: white">+ Add Song</a>
  <table style="width: 100%" style="background-color: #FBCCB1;">
      
    @foreach ($datas as $data) <td>
        <div class="card" style="width: 18rem;" style="background-color: #FBCCB1; display: inline-block;">
            <div class="card-body"style="background-color: #CE8054; color: white">
                
                <h5 class="card-title">{{$data -> Judul_Lagu}}</h5>
                <p style="color: white">{{$data -> Penyanyi}}</p>
                <h6 style="color: white">{{$data -> created_at->diffForHumans()}}</h6>
                <p class="card-text">{{ Str::limit($data -> Lirik, 140, '...')}}</p>
                <a href="{{route('detaillagu', $data -> id)}}" class="card-link" style="color: white">See Detail</a>
                <a href="{{route('updatelagu', $data -> id)}}" class="card-link" style="color: white">Update</a>

                <form action="{{route('hapuslagu', $data -> id)}}" method="post">
                @csrf
                @method('DELETE')
                <br>
                <button type="submit" class="btn btn-link"style="color: white">
                 Delete
                </button></form>
            </div>
        </div>
        </td>
      @endforeach
  </table>
</body>
</html>