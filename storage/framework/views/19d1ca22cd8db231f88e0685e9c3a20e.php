<?php $__env->startSection('content'); ?>


    <h1>Faça o seu login:</h1>
    <form class='form-control' action="<?php echo e(route('logando')); ?>" method="Post">
        <?php echo csrf_field(); ?>
        <div class="form-control">
            <label for="email">
                <input type="text" name="email" placeholder="Digite o seu email:">
            </label>
        </div>

        <div class="form-control">
            <label for="password">
                <input type="password" name="password" placeholder="Digite sua senha:">
            </label>
        </div>
        <div>
            <input class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>