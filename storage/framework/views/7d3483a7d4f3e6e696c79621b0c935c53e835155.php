<html lang="en">
<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <?php echo $__env->make('includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('includes.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\Singharat.github.io-master\resources\views/layouts/master_template.blade.php ENDPATH**/ ?>