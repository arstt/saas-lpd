<div class="card">
    <div class="card-header">
        <h4>Two-Factor Authentication</h4>
    </div>
    <div class="card-body">

        <?php if(! auth()->user()->two_factor_secret): ?>
        
        <form method="POST" action="<?php echo e(url('user/two-factor-authentication')); ?>">
            <?php echo csrf_field(); ?>

            <button type="submit" class="btn btn-primary">
                <?php echo e(__('Enable Two-Factor')); ?>

            </button>
        </form>
        <?php else: ?>
        
        <form method="POST" action="<?php echo e(url('user/two-factor-authentication')); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <button type="submit" class="btn btn-danger mb-3">
                <?php echo e(__('Disable Two-Factor')); ?>

            </button>
        </form>

        <?php if(session('status') == 'two-factor-authentication-enabled'): ?>
        
        <p>
            <?php echo e(__('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.')); ?>

        </p>

        <div class="mb-3">
            <?php echo auth()->user()->twoFactorQrCodeSvg(); ?>

        </div>
        <?php endif; ?>

        
        <p>
            <?php echo e(__('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.')); ?>

        </p>

        <p>
            <?php $__currentLoopData = json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div><?php echo e($code); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>

        
        <form method="POST" action="<?php echo e(url('user/two-factor-recovery-codes')); ?>">
            <?php echo csrf_field(); ?>

            <button type="submit" class="btn btn-dark">
                <?php echo e(__('Regenerate Recovery Codes')); ?>

            </button>
        </form>
        <?php endif; ?>
    </div>
</div><?php /**PATH E:\web\ardipa\resources\views/profile/two-factor-authentication-form.blade.php ENDPATH**/ ?>