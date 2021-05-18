<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div>
                    <a href="<?php echo e(route("novo_cliente")); ?>" class="btn btn-primary">Cadastrar Cliente <i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <?php if(count($clientes) === 0): ?>
        <p>Ainda não existem clientes cadastrados</p>
    <?php else: ?>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>email</th>
                    <th>cidade</th>
                    <th>estado</th>
                    <th>Hobbies</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cliente["nome"]); ?></td>
                        <td><?php echo e($cliente["email"]); ?></td>
                        <td><?php echo e($cliente["cidade"]["nome"]); ?></td>
                        <td><?php echo e($cliente["cidade"]["estado"]["nome"]); ?></td>
                        
                        <td>
                            <ul class="list-group sm">
                            <?php $__currentLoopData = $cliente["hobbies"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobbie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item sm"><?php echo e($hobbie["nome"]); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route("editar_cliente", ["id" => $cliente["id"]])); ?>" class="btn btn-primary sm"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo e(route("remover_cliente",["id" => $cliente["id"]])); ?>" class="btn btn-danger sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </tbody>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/home.blade.php ENDPATH**/ ?>