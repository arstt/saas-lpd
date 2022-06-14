<div class="card">
    <form method="POST" action="<?php echo e(route('user-password.update')); ?>">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

        <div class="card-header">
            <h4>Update Password</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label><?php echo e(__('Current Password')); ?></label>
                <input type="password" class="form-control" name="current_password" required
                    autocomplete="current-password" />
            </div>
            <div class="form-group">
                <label><?php echo e(__('Password')); ?></label>
                <input type="password" name="password" required autocomplete="new-password" class="form-control" />
            </div>
            <div class="form-group">
                <label><?php echo e(__('Confirm Password')); ?></label>
                <input type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">
                <?php echo e(__('Update Password')); ?>

            </button>
        </div>
    </form>
</div><?php /**PATH C:\laragon\www\foorstisla\resources\views/profile/update-password-form.blade.php ENDPATH**/ ?>