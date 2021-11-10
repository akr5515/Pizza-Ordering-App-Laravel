<?php $__env->startSection('content'); ?>
    
    <div class="flex-center position-ref full-height">


        <div class="content">
            <div class="title m-b-md">
                Pizzaaasss List <?php echo e($name); ?> <?php echo e($age); ?>

            </div>
            

            
            

            

            <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    
                    <?php echo e($pizza->name); ?>- <?php echo e($pizza->type); ?> -<?php echo e($pizza->base); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bjit/Desktop/training_works/laravel/day2/angkons-pizza-house/resources/views/pizzas/index.blade.php ENDPATH**/ ?>