<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>

        <footer>
            Copyright 2021 pizza HOUSE
        </footer>
    </body>
</html>
<?php /**PATH /home/bjit/Desktop/training_works/laravel/day2/angkons-pizza-house/resources/views/layouts/layout.blade.php ENDPATH**/ ?>