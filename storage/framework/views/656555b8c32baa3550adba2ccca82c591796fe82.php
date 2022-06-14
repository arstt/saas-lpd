<!DOCTYPE html>
<html lang="lang=" <?php echo e(str_replace('_', '-', app()->getLocale())); ?>"">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

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
        <section class="section">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?php echo e(asset('stisla/modules/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('stisla/modules/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('stisla/modules/tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('stisla/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('stisla/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('stisla/modules/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('stisla/js/stisla.js')); ?>"></script>

    <!-- Plugins -->
    <?php echo $__env->yieldContent('plugin'); ?>
    <!-- Page Specific JS File -->
    <?php echo $__env->yieldContent('js'); ?>
    <!-- Template JS File -->
    <script src="<?php echo e(asset('stisla/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('stisla/js/custom.js')); ?>"></script>
</body>

</html><?php /**PATH C:\laragon\www\forstisla\resources\views/layouts/app.blade.php ENDPATH**/ ?>