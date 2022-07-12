<?php $__env->startSection('content'); ?>

    <div class="col-md-8 blog-main">
        <div class="row mb-2">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Develop</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="/articles/<?php echo e($article['id']); ?>"><?php echo e($article['title']); ?></a>
                            </h3>
                            <div class="mb-1 text-muted"><?php echo e($article['created_at']); ?></div>
                            <p class="card-text mb-auto"><?php echo e($article['description']); ?></p>
                            <a href="#">Continue reading</a>
                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skillbox_laravel/resources/views/home.blade.php ENDPATH**/ ?>