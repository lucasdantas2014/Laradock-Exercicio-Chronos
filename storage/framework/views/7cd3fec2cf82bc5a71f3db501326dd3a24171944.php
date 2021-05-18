<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Exercicio Chronos</title>

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/bootstrap.min.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('assets\fontawesome\font-awesome.min.css')); ?>">

    
    <script src="<?php echo e(asset('assets\jquery.min.js')); ?>"></script>
</head>
<body>

    <h1 class="text-center">Exercicio Chronos</h1>
    <hr>
    <?php echo $__env->yieldContent('content'); ?>
    
    
    <script src="<?php echo e(asset('assets/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script_content'); ?>
</body>
</html>
<?php /**PATH /var/www/resources/views/layouts/main_layout.blade.php ENDPATH**/ ?>