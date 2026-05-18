<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Perpustakaan</a>

        <div class="navbar-nav">
            <a class="nav-link" href="<?php echo e(route('anggota.index')); ?>">Anggota</a>
            <a class="nav-link" href="<?php echo e(route('kategori.index')); ?>">Kategori</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html><?php /**PATH D:\perpustakaan\perpustakaan\resources\views/layouts/app.blade.php ENDPATH**/ ?>