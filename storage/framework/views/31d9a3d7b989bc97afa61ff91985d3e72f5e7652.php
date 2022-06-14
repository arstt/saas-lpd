<!DOCTYPE html>
<html lang="lang=" <?php echo e(str_replace('_', '-' , app()->getLocale())); ?>"">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo $__env->yieldContent('title'); ?></title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('frontend/images/favicon.svg')); ?>" />

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('stisla/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('stisla/modules/fontawesome/css/all.min.css')); ?>">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo e(asset('stisla/modules/bootstrap-social/bootstrap-social.css')); ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('stisla/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('stisla/css/components.css')); ?>">
  <!-- Page Specific CSS File -->
  <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <?php if (isset($component)) { $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navbar::class, []); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c)): ?>
<?php $component = $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c; ?>
<?php unset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Sidebar::class, []); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa)): ?>
<?php $component = $__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa; ?>
<?php unset($__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa); ?>
<?php endif; ?>
      <div class="main-content">
        <section class="section">
            <?php if(auth()->check() && auth()->user()->trial_ends_at): ?>
                <div class="alert alert-info text-center">Anda Memiliki <?php echo e(now()->diffInDays(auth()->user()->trial_ends_at)); ?> hari tersisa untuk free trial.
                <a href="<?php echo e(route('billing')); ?>">Pilih Paket Berlangganan</a> kapan saja.</div>
            <?php endif; ?>
          <?php echo $__env->yieldContent('content'); ?>
        </section>
      </div>
    </div>
  </div>

  <script src="<?php echo e(asset('dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('dist/adminlte.js')); ?>"></script>
  <script src="<?php echo e(asset('dist/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('dist/datatables.min.js')); ?>"></script>
  <!-- General JS Scripts -->
  
  <script src="<?php echo e(asset('stisla/modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('stisla/modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('stisla/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('stisla/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('stisla/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('stisla/js/stisla.js')); ?>"></script>
  <script src="<?php echo e(asset('dist/simple.money.format.js')); ?>"></script>

  <!-- Plugins -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?php echo e(asset('stisla/js/scripts.js')); ?>"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?php echo e(asset('stisla/js/custom.js')); ?>"></script>


  <script>
    $('.number').simpleMoneyFormat()
    $('.number').keydown(function(e){
      const keyCode = e.keyCode
      const excludedKeys = [8, 37, 39, 46];
      if (!((keyCode >= 48 && keyCode <= 57) || (keyCode >= 96 && keyCode <= 105) || (excludedKeys.includes(keyCode)))) {
        e.preventDefault();
      }
    })
  </script>

  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /Users/putuardipa/dipgital/forstisla/resources/views/layouts/backend.blade.php ENDPATH**/ ?>