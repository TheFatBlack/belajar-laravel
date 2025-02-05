<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>

<body>
    <h1>Belajar Laravel</h1>
    <h3>Selama datang {{$nama}},<br> di kelas {{$kelas}}, <br>dan tinggal di{{$alamat}}</h3>

    <h3>Mantan {{$nama}} adalah</h3>
    <ol>
        @foreach($mantanapip as $ma)
        <li>{{$ma}}</li>
        @endforeach
    </ol>
</body>

</html>