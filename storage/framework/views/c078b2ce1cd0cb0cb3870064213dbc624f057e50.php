<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/datasiswa/updatesiswa" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($s->id); ?>"> <br/>
		Nama <input type="text" required="required" name="nama" value="<?php echo e($s->nama); ?>"> <br/>
		Kelas <input type="text" required="required" name="kelas" value="<?php echo e($s->kelas); ?>"> <br/>
		Alamat <textarea required="required" name="alamat"><?php echo e($s->alamat); ?></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\school_app\resources\views/editsiswa.blade.php ENDPATH**/ ?>