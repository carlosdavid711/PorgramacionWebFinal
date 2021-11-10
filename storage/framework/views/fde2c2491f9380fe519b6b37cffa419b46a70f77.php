<div class="table-responsive">
    <table class="table" id="gestionNotas-table">
        <thead>
            <tr>
                <th>Zona</th>
        <th>Examen</th>
        <th>Final</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $gestionNotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestionNotas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($gestionNotas->Zona); ?></td>
            <td><?php echo e($gestionNotas->Examen); ?></td>
            <td><?php echo e($gestionNotas->final); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['gestionNotas.destroy', $gestionNotas->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('gestionNotas.show', [$gestionNotas->id])); ?>" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('gestionNotas.edit', [$gestionNotas->id])); ?>" class='btn btn-default btn-xs'>
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
<?php /**PATH C:\laragon\www\adminlte-generator\resources\views/gestion_notas/table.blade.php ENDPATH**/ ?>