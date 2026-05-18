

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Daftar Anggota Perpustakaan</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode Anggota</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $anggota_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($item['kode']); ?></td>
            <td><?php echo e($item['nama']); ?></td>
            <td><?php echo e($item['email']); ?></td>
            <td>
                <span class="badge bg-success">
                    <?php echo e($item['status']); ?>

                </span>
            </td>
            <td>
                <a href="<?php echo e(route('anggota.show', $item['id'])); ?>"
                   class="btn btn-primary btn-sm">
                   Detail
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\perpustakaan\perpustakaan\resources\views/anggota/index.blade.php ENDPATH**/ ?>