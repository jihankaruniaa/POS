<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman User</title>
</head>
    <style>
        body {
            background-color: #f4f4f4;
            color: #373737;
            font-family: 'Perpetua', serif;
            font-size: 25px;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            background-color: #dcd0c0;
            border: 1px solid #c0b283;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #c0b283;
            text-align: center;
        }
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile Page</h1>
        <hr size="2" color= "#c0b283">
        <br>
        <ol>
            <li>NIM     : {{$id}}</li>
            <li>Nama    : {{$name}}</li>
            <li>Kelas   : TI - 2H</li>
            <li>Prodi   : D4 Teknik Informatika</li>
            <li>Jurusan : Teknologi Informasi</li>
        </ol>
    </div>
</body>
</html>