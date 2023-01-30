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
						<?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($b-> id); ?></td>
							<td><img width="150px" src="<?php echo e(url('/data_file/'.$b->file)); ?>"></td>
							<td><?php echo e($b->judul); ?></td>
                            <td><?php echo e($b->deskripsi); ?></td>
							<td><a class="btn btn-danger" href="/berita/hapus/<?php echo e($b->id); ?>">Hapus</a></td>
							<td><a class="btn btn-success" href="/berita/editberita/<?php echo e($b->id); ?>">Edit</a></td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<a href="/berita/tambahberita" button type="button" class="btn btn-success" >Tambah Berita</button></a>
                <a href="/" button type="button" class="btn btn-danger" >Kembali</button></a>
			</div>
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\sso_sekolah\resources\views/berita.blade.php ENDPATH**/ ?>