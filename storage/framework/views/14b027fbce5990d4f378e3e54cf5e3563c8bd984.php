<?php $__env->startSection('title', 'Laporan'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col">
            <h3>Daftar Laporan</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="/admin/laporan/tambah" class="btn btn-primary">Tambah Laporan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Pengeluaran</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($l->pemasukan); ?></td>
                        <td><?php echo e($l->pengeluaran); ?></td>
                        <td><?php echo e($l->jenis); ?></td>
                        <td><?php echo e($l->tanggal); ?></td>
                        <td>
                            <a href="/admin/laporan/ubah/<?php echo e($l->id); ?>" class="badge bg-success">Edit</a>
                            <a href="/admin/laporan/detail/<?php echo e($l->id); ?>" class="badge bg-primary">Detail</a>
                            <form action="/admin/laporan/hapus/<?php echo e($l->id); ?>" class="d-inline" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button class="badge bg-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ittihadulIkhwan\resources\views/laporan/index.blade.php ENDPATH**/ ?>