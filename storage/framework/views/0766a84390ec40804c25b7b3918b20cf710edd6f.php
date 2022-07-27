<?php $__env->startSection('title', 'Akun'); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="row mt-3">
    <div class="col">
        <h3>Akun</h3>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <a href="/admin/registrasi" class="btn btn-primary">Tambah Admin</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="card shadow">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5 class="text-center card-title"><?php echo e(auth()->user()->name); ?></h5>
                </li>
                <li class="list-group-item">
                    <h6>Email: </h6><?php echo e(auth()->user()->email); ?>

                </li>
                <li class="list-group-item">
                    <h6>Nomor Telepon: </h6><?php echo e(auth()->user()->nomor_telpon); ?>

                </li>
                <li class="list-group-item">
                    <h6>Role: </h6><?php echo e(auth()->user()->role); ?>

                </li>
                <li class="list-group-item text-center">
                    <a href="/admin/akun/ubah" class="btn btn-primary">Ubah Data Akun</a>
                    <a href="/admin" class="btn btn-success">Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ittihadulIkhwan\resources\views/admin/akun.blade.php ENDPATH**/ ?>