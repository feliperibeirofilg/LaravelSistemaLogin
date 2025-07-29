<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        
        <form class="bg-white p-4 rounded shadow" style="width: 100%; max-width: 500px;" action="<?php echo e(route('logando')); ?>" method="Post">
            <?php echo csrf_field(); ?>
            <h1 class="mb-4 text-center">Faça o seu login:</h1>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                    <input class="form-control border border-dark rounded" type="text" name="email" placeholder="Digite o seu email:">
                
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                    <input class="form-control border border-dark rounded" type="password" name="password" placeholder="Digite sua senha:">
                
            </div>
            <div class="text-center">
                <input class="btn btn-primary" type="submit" value="Login">
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>