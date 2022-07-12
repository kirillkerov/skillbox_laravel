<?php $__env->startSection('content'); ?>

    <div class="col">
        <h1>Добавление нового поста</h1>

        <form method="post" action="/articles">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('layout.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
                <label for="inputName">Имя поста</label>
                <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Введите имя поста" name="name" value="<?php echo e(old('name')); ?>">
                <small id="nameHelp" class="form-text text-muted">Имя должно быть уникальным, состоять только из латинских символов, цифр и символов тире и подчеркивания</small>
            </div>
            <div class="form-group">
                <label for="inputTitle">Заголовок</label>
                <input type="text" class="form-control" id="inputTitle" placeholder="Введите заголовок поста" name="title" value="<?php echo e(old('title')); ?>">
            </div>
            <div class="form-group">
                <label for="inputDescription">Краткое описание</label>
                <input type="text" class="form-control" id="inputDescription" aria-describedby="descriptionHelp" placeholder="Введите имя поста" name="description" value="<?php echo e(old('description')); ?>">
                <small id="descriptionHelp" class="form-text text-muted">Не более 255 символов</small>
            </div>
            <div class="form-group">
                <label for="textareaBody">Текст</label>
                <textarea class="form-control" id="textareaBody" rows="3" name="body"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkIsPublished" name="is_published" value="1">
                <label class="form-check-label" for="checkIsPublished">Сразу опубликовать</label>
            </div>
            <button type="submit" class="btn btn-primary">Создать пост</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skillbox_laravel/resources/views/articles/create.blade.php ENDPATH**/ ?>