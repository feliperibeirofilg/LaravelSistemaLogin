<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">

       <!--<a href="<?php echo e(route('mostrarFormulario')); ?>" class="navbar-brand">Início</a>-->

        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->admin): ?>
                            <!-- Admin Links -->
                            <a href="<?php echo e(route('mostrarFormulario')); ?>" class="navbar-brand">Início</a>
                            <li class="nav-item">
                                <a class="nav-link" href="/usuario/criarusuario">Criar Usuário</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/usuario/listarusuarios">Editar Usuário</a>
                            </li>
                        <?php else: ?>
                            <!-- Links para usuário comum -->
                             <a href="<?php echo e(route('mostrarFormulario')); ?>" class="navbar-brand" class="navbar-brand">Início</a>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Meu Perfil</a> <!--Aqui vamos colocar para mostrar nossos dados  seria legal fazer um upload de fotos-->
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <!-- Visitante -->
                        <a href="/" class="navbar-brand">Início</a>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/usuario/criarusuario">Criar Usuário</a>
                        </li>
                    <?php endif; ?>
                </ul>

                <?php if(auth()->guard()->check()): ?>
                    <!-- Botão de logout alinhado à direita -->
                    <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-outline-light btn-sm" type="submit">Sair</button>
                    </form>
                <?php endif; ?>
    </nav>

    <div class="container mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>