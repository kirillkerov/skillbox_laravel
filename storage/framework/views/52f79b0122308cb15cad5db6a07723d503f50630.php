<?php $__env->startSection('content'); ?>

    <div class="col">
        <h1><?php echo e($article['title']); ?></h1>
        <p><?php echo e($article['body']); ?></p>
        <a href="/">Вернуться на главную</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skillbox_laravel/resources/views/articles/show.blade.php ENDPATH**/ ?>