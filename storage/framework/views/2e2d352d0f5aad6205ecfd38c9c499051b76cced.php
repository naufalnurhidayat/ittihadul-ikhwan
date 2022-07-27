<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
<div class="jumbotron mt-3">
    <h1 class="display-4">Selamat datang, Admin!</h1>
    <p class="lead">Halaman ini digunakan untuk admin website Masjid Ittihadul Ikhwan.</p>
    <hr class="my-4">
    <p>Silahkan isi kegiatan, laporan, dan yang lainnya.</p>
    <a class="btn btn-primary btn-lg" href="<?php echo e(url('/admin/laporan')); ?>" role="button">Tambahkan Laporan</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ittihadulIkhwan\resources\views/admin/index.blade.php ENDPATH**/ ?>