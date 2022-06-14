

<?php $__env->startSection('title', 'Tidak Ditemukan'); ?>
<?php $__env->startSection('code', '404'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-error mt-5">
  <div class="page-inner">
    <h1>404</h1>
    <div class="page-description">
      Halaman yang Anda cari tidak ditemukan.
    </div>
    <div class="page-search">
      <div class="mt-2">
        <a href="<?php echo e(route('welcome')); ?>">Kembali ke Home</a>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\forstisla\resources\views/errors/404.blade.php ENDPATH**/ ?>