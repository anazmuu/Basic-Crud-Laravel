<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3>Tambah Siswa</h3>

        <form action="/datasiswa/proses_siswa" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Siswa : </label>
            <input type="text" class="form-control" name="nama">
        </div>   
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kelas : </label>
            <input type="text" class="form-control" name="kelas">
        </div>  
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat : </label>
            <input type="text" class="form-control" name="alamat">
        </div>   
        <input type="submit" value="Simpan Data">    
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>