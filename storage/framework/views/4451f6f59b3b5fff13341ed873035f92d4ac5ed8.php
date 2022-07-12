<?php $__env->startSection('content'); ?>

    <div class="col">
        <h1>Список обращений</h1>

        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <strong class="email text-primary"><?php echo e($message->email); ?></strong>
            <div class="message"><?php echo e($message->message); ?></div>
            <div class="created_at text-muted text"><?php echo e($message->created_at->toFormattedDateString()); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skillbox_laravel/resources/views/admin/feedback.blade.php ENDPATH**/ ?>