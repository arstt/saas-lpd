<?php $__env->startSection('title', 'Langganan'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4><?php echo e('Langganan'); ?></h4>
    </div>
        <div class="card-body">
            <div class="section-body">
                <h2 class="section-title">Berlangganan</h2>

                <?php if(session('message')): ?>
                    <div class="alert alert-info"><?php echo e(session('message')); ?></div>
                <?php endif; ?>

                <?php if(is_null($currentPlan)): ?>
                    You are now on Free Plan. Please choose plan to upgrade:
                    <br /><br />
                <?php endif; ?>

                <div class="row">
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                  <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing">
                      <div class="pricing-title">
                       <?php echo e($plan->name); ?>

                      </div>
                      <div class="pricing-padding">
                        <div class="pricing-price">
                          <div>IDR <?php echo e(number_format($plan->price)); ?> K</div>
                          <div>per bulan</div>
                        </div>
                        <div class="pricing-details">
                          <div class="pricing-item">
                            <div class="pricing-item-label"></div>
                          </div>
                        </div>
                      </div>
                      <div class="pricing-cta">
                        <?php if(!is_null($currentPlan) && $plan->stripe_plan_id == $currentPlan->stripe_price): ?> <!-- ->stripe_price -->
                            <i> Paket Berlangganan Anda Saat ini ! </i>
                            <br/>
                                <?php if(!$currentPlan->onGracePeriod()): ?>
                                    <a href="<?php echo e(route('cancel')); ?>" onclick="return confirm('Are you sure?')">Batal Berlangganan</a>
                                <?php else: ?>
                                    Your subscription will end on <?php echo e($currentPlan->ends_at->toDateString()); ?>

                                    <br />
                                    <a href="<?php echo e(route('resume')); ?>" >Lanjutkan Berlangganan</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <a href="<?php echo e(route('checkout', $plan->id)); ?>">Subscribe to <?php echo e($plan->name); ?></a>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>


                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if(!is_null($currentPlan)): ?>
                <br />
                    <div class="card">
                        <div class="section-body">
                            <h2 class="section-title">Payment Method</h2>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Brand</th>
                                        <th>Expires at</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $paymentMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentMethod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($paymentMethod->card->brand); ?></td>
                                        <td><?php echo e($paymentMethod->card->exp_month); ?> / <?php echo e($paymentMethod->card->exp_year); ?></td>
                                        <td>
                                            <?php if($defaultPaymentMethod->id == $paymentMethod->id): ?>
                                                default
                                            <?php else: ?>
                                                <a href="<?php echo e(route('payment-methods.markDefault', $paymentMethod->id)); ?>" class="btn btn-primary">Mark as Default</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <br />
                            <a href="<?php echo e(route('payment-method.create')); ?>" class="btn btn-primary">Add Payment Method</a>
                        </div>
                    </div>
                 <?php endif; ?>
                </div>

                 <br />
            <div class="card">
                <div class="section-body">
                    <h2 class="section-title">History Pembayaran</h2>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Tanggal Pembayaran</th>
                            <th>Jumlah</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($payment->created_at); ?></td>
                                <td>$<?php echo e(number_format($payment->total)); ?></td>
                                <td>
                                    <a href="<?php echo e(route('invoices.download', $payment->id)); ?>" class="btn btn-sm btn-primary">Download invoice</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
              </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/putuardipa/dipgital/forstisla/resources/views/billing/index.blade.php ENDPATH**/ ?>