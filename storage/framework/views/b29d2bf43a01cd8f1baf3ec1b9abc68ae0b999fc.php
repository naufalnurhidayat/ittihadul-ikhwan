<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/admin')); ?>">MASJID ITTIHADUL IKHWAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('/admin')); ?>">Beranda</a>
          <a class="nav-link" href="<?php echo e(url('/admin/agenda')); ?>">Agenda</a>
          <a class="nav-link" href="<?php echo e(url('/admin/laporan')); ?>">Laporan</a>
          <a class="nav-link" href="<?php echo e(url('/admin/lainnya')); ?>">Lainnya</a>
          <a class="nav-link" href="<?php echo e(url('/admin/akun')); ?>">Akun</a>
          <form action="<?php echo e(url('/logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">
              Logout
            </button>
          </form>
        </div>
      </div>
    </div>
  </nav><?php /**PATH C:\xampp\htdocs\ittihadulIkhwan\resources\views/partials/navbar-admin.blade.php ENDPATH**/ ?>