<?php $__env->startSection('title', 'Forgot Password'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img src="https://ui-avatars.com/api/?name=<?php echo e(config('app.name')); ?>&background=fff&color=6777ef&size=100"
                    alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <?php if(session('status')): ?>
            <div class="alert alert-info alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    <?php echo e(session('status')); ?>

                </div>
            </div>
            <?php endif; ?>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Forgot Password</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        <?php echo e(__('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')); ?>

                    </p>
                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="email"><?php echo e(__('Email')); ?></label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                value="<?php echo e(old('email')); ?>" required autofocus>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                <?php echo e(__('Email Password Reset Link')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/putuardipa/dipgital/forstisla/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>