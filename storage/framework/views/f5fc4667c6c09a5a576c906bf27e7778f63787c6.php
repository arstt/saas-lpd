<div class="card">
    <form method="POST" action="<?php echo e(route('user-profile-information.update')); ?>">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

        <div class="card-header">
            <h4>Edit Profile</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label><?php echo e(__('Name')); ?></label>
                <input type="text" class="form-control" name="name" value="<?php echo e(old('name') ?? auth()->user()->name); ?>"
                    required autofocus autocomplete="name" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control"
                    value="<?php echo e(old('email') ?? auth()->user()->email); ?>" required autofocus />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">
                <?php echo e(__('Update Profile')); ?>

            </button>
        </div>
    </form>
</div><?php /**PATH E:\web\ardipa\resources\views/profile/update-profile-information-form.blade.php ENDPATH**/ ?>