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
  @foreach($siswa as $s)
	<form action="/datasiswa/updatesiswa" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
        <input type="hidden" name="id" value="{{ $s->id }}"> <br/>
            <div class="mb-3">
				<b><label for="exampleInputPassword1" class="form-label" >Nama</label></b>
				<input type="text" class="form-control" name="nama" value="{{ $s->nama }}">
			</div>
			<div class="mb-3">
				<b><label for="exampleInputPassword1" class="form-label" >Kelas</label></b>
				<input type="text" class="form-control" name="kelas" value="{{ $s->kelas }}">
			</div>
            <div class="mb-3">
			<b><label for="exampleInputPassword1" class="form-label" >Alamat</label></b>
            <input type="text" class="form-control" name="alamat" value="{{ $s->alamat }}">
            <br>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
		</div>        
	</form>
	@endforeach

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>