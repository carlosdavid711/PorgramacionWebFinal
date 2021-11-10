<div class="table-responsive">
    <table class="table" id="padres-table">
        <thead>
            <tr>
                <th>Usuario Padre</th>
        <th>Nombre Completo</th>
        <th>Telefono</th>
        <th>Correo Eletronico</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $padres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $padres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($padres->Usuario_Padre); ?></td>
            <td><?php echo e($padres->Nombre_Completo); ?></td>
            <td><?php echo e($padres->Telefono); ?></td>
            <td><?php echo e($padres->Correo_eletronico); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['padres.destroy', $padres->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('padres.show', [$padres->id])); ?>" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('padres.edit', [$padres->id])); ?>" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\adminlte-generator\resources\views/padres/table.blade.php ENDPATH**/ ?>