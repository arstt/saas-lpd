<?php $__env->startSection('title', 'Langganan'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4><?php echo e('Tambah Metode Pembayran'); ?></h4>
    </div>
        <div class="card-body">
            <div class="section-body">
                <?php if(session('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-6">
                        <form action="<?php echo e(route('payment-method.store')); ?>" method="POST" id="checkout-form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="payment-method" id="payment-method" value="" />

                            <input id="card-holder-name" type="text" placeholder="Card holder name" class="form-control">

                            <br />

                            <!-- Stripe Elements Placeholder -->
                            <div id="card-element"></div>

                            <br />

                            <button id="card-button" class="btn btn-primary">
                                Tambah
                            </button>

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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\forstisla\resources\views/payment-method/create.blade.php ENDPATH**/ ?>