

<?php $__env->startSection('content'); ?>

<h2>
    Hasil Pencarian:
    <span class="text-danger"><?php echo e($keyword); ?></span>
</h2>

<div class="row mt-4">

    <?php $__empty_1 = true; $__currentLoopData = $kategori_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <div class="col-md-4 mb-4">

        <div class="card">

            <div class="card-body">

                <h4>
                    <?php echo str_ireplace(
                        $keyword,
                        '<mark>'.$keyword.'</mark>',
                        $kategori['nama']
                    ); ?>

                </h4>

                <p><?php echo e($kategori['deskripsi']); ?></p>

                <span class="badge bg-success">
                    <?php echo e($kategori['jumlah_buku']); ?> Buku
                </span>

            </div>

        </div>

    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

    <div class="alert alert-danger">
        Data kategori tidak ditemukan.
    </div>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\perpustakaan\perpustakaan\resources\views/kategori/search.blade.php ENDPATH**/ ?>