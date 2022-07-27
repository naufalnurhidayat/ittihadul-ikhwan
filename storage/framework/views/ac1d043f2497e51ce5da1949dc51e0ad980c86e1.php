<?php $__env->startSection('title', 'Lainnya'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col">
            <h3>Daftar Lainnya</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="/admin/lainnya/tambah" class="btn btn-primary">Tambah Lainnya</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $utilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(asset('storage/' . $utility->foto)); ?>" alt="<?php echo e($utility->judul); ?>" style="width: 8rem;"></td>
                        <td><?php echo e($utility->judul); ?></td>
                        <td><?php echo e($utility->keterangan); ?></td>
                        <td>
                            <a href="/admin/lainnya/ubah/<?php echo e($utility->id); ?>" class="badge bg-success">Edit</a>
                            <a href="/admin/lainnya/detail/<?php echo e($utility->id); ?>" class="badge bg-primary">Detail</a>
                            <form action="/admin/lainnya/hapus/<?php echo e($utility->id); ?>" class="d-inline" method="POST">
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
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ittihadulIkhwan\resources\views/lainnya/index.blade.php ENDPATH**/ ?>