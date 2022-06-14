<div>

    <?php
    $breadcrumbs = explode(",",$breadcrumb);
    ?>

    <div class="section-header">
        <h1><?php echo e($heading); ?></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="breadcrumb-item"><?php echo e(ucwords($breadcrumb)); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\forstisla\resources\views/components/section-header.blade.php ENDPATH**/ ?>