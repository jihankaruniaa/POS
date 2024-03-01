<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman User</title>
</head>
<style>
    body {
        font-family: 'Perpetua', serif;
        color: #96858f;
        background-color: #d5d5d5;
        padding: 50px;
        font-size: 20px;
    }
</style>
<body>
    <div style="text-align: center">
        <h1>Halaman Profile</h1>
        <hr size="2" color= "#96858f">
    </div>
    <ol>
        <ul><strong>Profile User: </strong>
            <li>NIM     : {{$id}}</li>
            <li>Nama    : {{$name}}</li>
            <li>Kelas   : TI - 2H</li>
            <li>Prodi   : D4 Teknik Informatika</li>
            <li>Jurusan : Teknologi Informasi</li>
    </ol>
</body>
</html>