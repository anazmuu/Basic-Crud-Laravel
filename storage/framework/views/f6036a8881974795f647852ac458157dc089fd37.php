<!DOCTYPE html>
<html>
<head>
	<title>data sample laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">

	<h3>Data siswa</h3>
 
	<br/>
 
	<table class="table table-striped">
		<tr>
            <th>No. </th>
			<th>Nama</th>
            <th>Kelas</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
            <td><?php echo e($s-> id); ?></td>
			<td><?php echo e($s->nama); ?></td>
			<td><?php echo e($s->kelas); ?></td>
			<td><?php echo e($s->alamat); ?></td>
			<td>
				<a href="/datasiswa/editsiswa/<?php echo e($s->id); ?>">Edit</a>
				|
				<a href="/datasiswa/hapus_siswa/<?php echo e($s->id); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

   
    <a href="/datasiswa/tambahsiswa" button type="button" class="btn btn-success" >Tambah SISWA Baru</button></a>
    <a href="/" button type="button" class="btn btn-danger"> Kembali </button></a>

</div>
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\school_app\resources\views/datasiswa.blade.php ENDPATH**/ ?>