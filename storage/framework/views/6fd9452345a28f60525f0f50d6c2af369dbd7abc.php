<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <h2 class="text-center my-5">Berita</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php echo e($error); ?> <br/>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<?php endif; ?>
 
				<form action="/berita/proses" method="POST" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

 
					<div class="mb-3">
						<b><label for="exampleInputPassword1" class="form-label">Gambar</label></b>
   					 	<input type="file" class="form-control" name="file">
					</div>
 
					<div class="mb-3">
						<b><label for="exampleInputPassword1" class="form-label">Judul</label></b>
						<input type="text" class="form-control" name="judul">
					</div>
                    <div class="mb-3">
					<b><label for="exampleInputPassword1" class="form-label">Deskripsi</label></b>
						<textarea class="form-control" name="deskripsi" rows="3"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\sso_sekolah\resources\views/tambahberita.blade.php ENDPATH**/ ?>