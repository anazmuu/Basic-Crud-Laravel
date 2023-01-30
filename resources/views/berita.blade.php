<!DOCTYPE html>
<html>
<head>
	<title>Berita</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
	<div class="row">
		<div class="container">
 
		
				
				<h4 class="my-5">Data</h4>
 
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th width="1%">File</th>
							<th>judul</th>
                            <th>Deskripsi</th>
							<th width="1%" colspan="2">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($berita as $b)
						<tr>
							<td>{{ $b-> id }}</td>
							<td><img width="150px" src="{{ url('/data_file/'.$b->file) }}"></td>
							<td>{{$b->judul}}</td>
                            <td>{{$b->deskripsi}}</td>
							<td><a class="btn btn-danger" href="/berita/hapus/{{ $b->id }}">Hapus</a></td>
							<td><a class="btn btn-success" href="/berita/editberita/{{ $b->id }}">Edit</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<a href="/berita/tambahberita" button type="button" class="btn btn-success" >Tambah Berita</button></a>
                <a href="/" button type="button" class="btn btn-danger" >Kembali</button></a>
			</div>
		</div>
	</div>
</body>
</html>