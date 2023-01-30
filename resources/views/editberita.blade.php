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
    <br>
    <h3>EDIT BERITA</h3>

  @foreach($berita as $b)
	<form action="/berita/updateberita" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
        <input type="hidden" name="id" value="{{ $b->id }}"> <br/>
				<b><label for="exampleInputPassword1" class="form-label" value="{{ $b->file }}">Gambar</label></b>
   			 	<input type="file" class="form-control" name="file">
			</div>
			<div class="mb-3">
				<b><label for="exampleInputPassword1" class="form-label" value="{{ $b->judul }}">Judul</label></b>
				<input type="text" class="form-control" name="judul">
			</div>
            <div class="mb-3">
			<b><label for="exampleInputPassword1" class="form-label" value="{{ $b->deskripsi }}">Deskripsi</label></b>
			<textarea class="form-control" name="deskripsi" rows="3"></textarea>
            
            <input type="submit" value="Simpan Data" class="btn btn-primary">
		</div>        
	</form>
	@endforeach

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>