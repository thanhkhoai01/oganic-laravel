<?php $__env->startSection('slider'); ?>
<?php echo $__env->make('components.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<!-- Hero Section Begin -->
<?php $__env->startSection('hero'); ?>
    <?php echo $__env->make('components.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- Hero Section End -->

<!--Content-->
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('users.checkouts.checkout-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /code/ogani-laravel/resources/views/users/checkouts/checkout.blade.php ENDPATH**/ ?>