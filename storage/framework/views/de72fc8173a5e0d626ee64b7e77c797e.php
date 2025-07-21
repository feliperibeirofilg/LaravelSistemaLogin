
<?php $__env->startSection('content'); ?>

    <h1>Faça o seu cadastro</h1>
        <form action="<?php echo e(route('criarUsuario')); ?>" method="post" class="form-control">
        <?php echo csrf_field(); ?>
            <div>
                <label for="nome">
                    <input type="text" name="nome" placeholder="Nome:">
                </label>
            </div>

            <div>
                <label for="email">
                    <input type="text" name="email" placeholder="Email:">
                </label>
            </div>

            <div>
                <label for="password">
                    <input type="text" name="password" placeholder="Sua senha:">
                </label>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Criar usuário">
            </div>
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/usuario/criarusuario.blade.php ENDPATH**/ ?>