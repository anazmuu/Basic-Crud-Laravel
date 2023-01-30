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

    <h3>Data Guru</h3>

    <table class="table">
        <tr>
            <th>no</th>
            <th>Nama Guru</th>
            <th>Jabatan</th>
            <th>Mata Pelajaran</th>
            <th>OPSI</th>
        <tr>
            <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($g-> id); ?></td>
            <td><?php echo e($g->nama); ?></td>
            <td><?php echo e($g->jabatan); ?></td>
            <td><?php echo e($g->mapel); ?> </td>
            <td>
        <a href="/dataguru/editguru/<?php echo e($g->id); ?>">Edit</a>
				|
				<a href="/dataguru/hapus_guru/<?php echo e($g->id); ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a href="/dataguru/tambahguru" button type="button" class="btn btn-success" >Tambah Data Guru</button></a>
    <a href="/" button type="button" class="btn btn-danger" >Kembali</button></a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\sso_sekolah\resources\views/dataguru.blade.php ENDPATH**/ ?>