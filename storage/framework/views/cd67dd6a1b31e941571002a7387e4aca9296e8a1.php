<?php $__env->startSection('content'); ?>
    <div class="wrapper pizza-details">
        <h1>Order for <?php echo e($pizza->name); ?> </h1>
        <p class="type">Type - <?php echo e($pizza->type); ?></p>
        <p class="base">Type - <?php echo e($pizza->base); ?></p>
    </div>

    <a href="/pizzas" class="back">Back to pizza</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bjit/Desktop/training_works/laravel/day2/angkons-pizza-house/resources/views/pizzas/show.blade.php ENDPATH**/ ?>