

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Daftar Kategori Buku</h2>

<div class="row">

    <?php $__currentLoopData = $kategori_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col-md-4 mb-4">

        <div class="card h-100 shadow-sm">

            <div class="card-body">

                <h4><?php echo e($kategori['nama']); ?></h4>

                <p><?php echo e($kategori['deskripsi']); ?></p>

                <span class="badge bg-primary">
                    <?php echo e($kategori['jumlah_buku']); ?> Buku
                </span>

                <div class="mt-3">
                    <a href="<?php echo e(route('kategori.show', $kategori['id'])); ?>"
                       class="btn btn-success btn-sm">
                        Detail
                    </a>
                </div>

            </div>

        </div>

    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\perpustakaan\perpustakaan\resources\views/kategori/index.blade.php ENDPATH**/ ?>