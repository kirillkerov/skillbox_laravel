<?php $__env->startSection('content'); ?>

    <div class="col">
        <h1>Форма обратной связи</h1>

        <form method="post" action="/contacts">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('layout.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
                <label for="inputEmail">Введите email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Введите email" name="email">
            </div>
            <div class="form-group">
                <label for="textareaMessage">Текст</label>
                <textarea class="form-control" id="textareaMessage" rows="3" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skillbox_laravel/resources/views/contacts/create.blade.php ENDPATH**/ ?>