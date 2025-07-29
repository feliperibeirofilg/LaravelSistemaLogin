<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form action="<?php echo e(route('usuario.atualizar', $usuarios->id)); ?>" method="POST" class="bg-white p-4 rounded shadow" style="width: 100%; max-width: 500px;">
            <?php echo csrf_field(); ?>
            <h2 class="mb-4 text-center fw-bold">Editar Usuários</h2>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control border border-dark rounded" name="nome"type="text" class="form-control" value="<?php echo e($usuarios->nome); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control border border-dark rounded" name="email" type="text" class="form-control" value="<?php echo e($usuarios->email); ?>" required>
            </div>

            <div class="mb-3">
                <label for="admin" class="form-label">É Admin?</label>
                <select name="admin" class="form-select" class="form-control border border-dark rounded">
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