<?php $__env->startSection('content'); ?>

    <h2>Lista de usuários</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Acões</th>
            </tr>
        </thead>
    
        <tbody>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($usuario->nome); ?></td>
                <td><?php echo e($usuario->email); ?></td>
                <td><?php echo e($usuario->admin ? 'Sim' : 'Não'); ?></td>
                <td>
                    <a href="<?php echo e(route('usuario.editarusuario', ['id' => $usuario->id])); ?>" class="btn btn-primary btn-sm">Editar</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/usuario/listarusuarios.blade.php ENDPATH**/ ?>