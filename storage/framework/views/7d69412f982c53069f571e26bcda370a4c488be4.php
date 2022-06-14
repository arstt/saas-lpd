<?php $__env->startSection('title', 'Langganan'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4><?php echo e('Langganan'); ?></h4>
    </div>
        <div class="card-body">
            <div class="section-body">
                <?php if(session('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                <?php endif; ?>

                <h2 class="section-title">Berlangganan Untuk <?php echo e($plan->name); ?></h2>

                <form action="<?php echo e(route('checkout.process')); ?>" method="POST" id="checkout-form">

                <div class="row">
                    <div class="col-md-4">
                        Nama Lembaga:
                        <br />
                        <input type="text" name="company_name" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                       Alamat 1:
                        <br />
                        <input type="text" name="address_line_1" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        Alamat 2 (optional):
                        <br />
                        <input type="text" name="address_line_2" class="form-control" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        Negara:
                        <br />
                        <select name="country_id" class="form-control">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        Kab/Kota:
                        <br />
                        <input type="text" name="city" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        Kode Pos:
                        <br />
                        <input type="text" name="postcode" class="form-control" />
                    </div>
                </div>

                <br />
                <div class="row">
                    <div class="col-md-6">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                        <?php endif; ?>

                <div class="row">
                    <div class="col-md-6">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="billing_plan_id" value="<?php echo e($plan->id); ?>" />
                            <input type="hidden" name="payment-method" id="payment-method" value="" />

                            <input id="card-holder-name" type="text" placeholder="Card holder name" class="form-control">

                            <!-- Stripe Elements Placeholder -->
                            <div id="card-element"></div>

                            <br />

                            <button id="card-button" class="btn btn-primary">
                                Pay $<?php echo e(number_format($plan->price)); ?>

                            </button>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"> </script>

<script src="https://js.stripe.com/v3/"></script>
<script>
  $( document ).ready(function() {
    let stripe = Stripe("<?php echo e(env('STRIPE_KEY')); ?>")
    let elements = stripe.elements()
    let style = {
      base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    }
    let card = elements.create('card', {style: style})
    card.mount('#card-element')
    let paymentMethod = null
    $('#checkout-form').on('submit', function (e) {
      if (paymentMethod) {
        return true
      }
      stripe.confirmCardSetup(
        "<?php echo e($intent->client_secret); ?>",
        {
          payment_method: {
            card: card,
            billing_details: {name: $('#card-holder-name').val()}
          }
        }
      ).then(function (result) {
        if (result.error) {
          console.log(result)
          alert('error')
        } else {
          paymentMethod = result.setupIntent.payment_method
          $('#payment-method').val(paymentMethod)
          $('#checkout-form').submit()
        }
      })
      return false
    })
  });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\forstisla\resources\views/billing/checkout.blade.php ENDPATH**/ ?>