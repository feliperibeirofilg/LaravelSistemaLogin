<?php $__env->startSection('content'); ?>

    <div class="container">
        <h2>Editar Usuários</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($erro); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    

        <form action="<?php echo e(route('usuario.atualizar', $usuarios->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome"type="text" class="form-control" value="<?php echo e($usuarios->nome); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" value="<?php echo e($usuarios->email); ?>" required>
            </div>

            <div class="mb-3">
                <label for="admin" class="form-label">É Admin?</label>
                <select name="admin" class="form-select" >
                    <option value="1" <?php echo e($usuarios->admin ? 'selected' : ''); ?>>Sim</option>
                    <option value="0" <?php echo e($usuarios->admin ? 'selected' : ''); ?>>Não</option>
                </select>
            </div>

            <button type= "submit" class="btn btn-primary">Salvar</button>
            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/usuario/editarusuario.blade.php ENDPATH**/ ?>