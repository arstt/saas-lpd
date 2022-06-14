<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal44133456ba452313bd7cc1991fe19a769a939e38 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SectionHeader::class, ['heading' => 'Profile','breadcrumb' => 'profile']); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44133456ba452313bd7cc1991fe19a769a939e38)): ?>
<?php $component = $__componentOriginal44133456ba452313bd7cc1991fe19a769a939e38; ?>
<?php unset($__componentOriginal44133456ba452313bd7cc1991fe19a769a939e38); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal158f6cbf9f463d1ce843c44cbab89a0897c83563 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SectionSubHeader::class, ['title' => 'Hi! '.e(Str::words(auth()->user()->name, 1, '')).'','lead' => 'Change information about yourself on this page.']); ?>
<?php $component->withName('section-sub-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal158f6cbf9f463d1ce843c44cbab89a0897c83563)): ?>
<?php $component = $__componentOriginal158f6cbf9f463d1ce843c44cbab89a0897c83563; ?>
<?php unset($__componentOriginal158f6cbf9f463d1ce843c44cbab89a0897c83563); ?>
<?php endif; ?>

<div class="row mt-sm-4">
  <div class="col-12 col-md-12 col-lg-5">
    <div class="card profile-widget">
      <div class="profile-widget-header">
        <img alt="image" src="<?php echo e(auth()->user()->avatar_url); ?>" class="rounded-circle profile-widget-picture">
        <div class="profile-widget-items">
          <div class="profile-widget-item">
            <div class="profile-widget-item-label">Posts</div>
            <div class="profile-widget-item-value">187</div>
          </div>
          <div class="profile-widget-item">
            <div class="profile-widget-item-label">Followers</div>
            <div class="profile-widget-item-value">6,8K</div>
          </div>
          <div class="profile-widget-item">
            <div class="profile-widget-item-label">Following</div>
            <div class="profile-widget-item-value">2,1K</div>
          </div>
        </div>
      </div>
      <div class="profile-widget-description">
        <div class="profile-widget-name"><?php echo e(auth()->user()->name); ?> <div class="text-muted d-inline font-weight-normal">
            <div class="slash"></div>
          </div>
        </div>
      </div>

    </div>
    <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication())): ?>
    <?php echo $__env->make('profile.two-factor-authentication-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
  </div>
  <div class="col-12 col-md-12 col-lg-7">
    <?php if(session('status')): ?>
    <div class="alert alert-primary alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        <?php if(session('status')=='profile-information-updated'): ?>
        Profile has been updated.
        <?php endif; ?>
        <?php if(session('status')=='password-updated'): ?>
        Password has been updated.
        <?php endif; ?>
        <?php if(session('status')=='two-factor-authentication-disabled'): ?>
        Two factor authentication disabled.
        <?php endif; ?>
        <?php if(session('status')=='two-factor-authentication-enabled'): ?>
        Two factor authentication enabled.
        <?php endif; ?>
        <?php if(session('status')=='recovery-codes-generated'): ?>
        Recovery codes generated.
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation())): ?>
    <?php echo $__env->make('profile.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
    <?php echo $__env->make('profile.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\ardipa\resources\views/profile.blade.php ENDPATH**/ ?>