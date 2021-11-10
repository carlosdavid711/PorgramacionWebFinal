<div class="table-responsive">
    <table class="table" id="estudiantes-table">
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
        <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($estudiante->Carnet); ?></td>
            <td><?php echo e($estudiante->Nombre_Completo); ?></td>
            <td><?php echo e($estudiante->Fecha_Nacimiento); ?></td>
            <td><?php echo e($estudiante->edad); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['estudiantes.destroy', $estudiante->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('estudiantes.show', [$estudiante->id])); ?>" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('estudiantes.edit', [$estudiante->id])); ?>" class='btn btn-default btn-xs'>
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
<?php /**PATH C:\laragon\www\adminlte-generator\resources\views/estudiantes/table.blade.php ENDPATH**/ ?>