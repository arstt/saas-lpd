

<?php $__env->startSection('title', 'Terlarang'); ?>
<?php $__env->startSection('code', '403'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-error mt-5">
  <div class="page-inner">
    <h1>403</h1>
    <div class="page-description">
      Anda tidak memiliki izin untuk mengakses halaman ini.
    </div>
    <div class="page-search">
      <div class="mt-2">
        <a href="<?php echo e(route('welcome')); ?>">Kembali ke Home</a>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\forstisla\resources\views/errors/403.blade.php ENDPATH**/ ?>