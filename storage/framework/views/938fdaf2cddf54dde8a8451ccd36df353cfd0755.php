<div class="table-responsive">
    <table class="table" id="maestros-table">
        <thead>
            <tr>
                <th>Carnet</th>
        <th>Nombre Completo</th>
        <th>Fecha Nacimiento</th>
        <th>Edad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $maestros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maestros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($maestros->Carnet); ?></td>
            <td><?php echo e($maestros->Nombre_Completo); ?></td>
            <td><?php echo e($maestros->Fecha_Nacimiento); ?></td>
            <td><?php echo e($maestros->edad); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['maestros.destroy', $maestros->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('maestros.show', [$maestros->id])); ?>" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('maestros.edit', [$maestros->id])); ?>" class='btn btn-default btn-xs'>
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
<?php /**PATH C:\laragon\www\adminlte-generator\resources\views/maestros/table.blade.php ENDPATH**/ ?>