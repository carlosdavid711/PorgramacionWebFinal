<!-- Carnet Field -->
<div class="col-sm-12">
    <?php echo Form::label('Carnet', 'Carnet:'); ?>

    <p><?php echo e($estudiante->Carnet); ?></p>
</div>

<!-- Nombre Completo Field -->
<div class="col-sm-12">
    <?php echo Form::label('Nombre_Completo', 'Nombre Completo:'); ?>

    <p><?php echo e($estudiante->Nombre_Completo); ?></p>
</div>

<!-- Fecha Nacimiento Field -->
<div class="col-sm-12">
    <?php echo Form::label('Fecha_Nacimiento', 'Fecha Nacimiento:'); ?>

    <p><?php echo e($estudiante->Fecha_Nacimiento); ?></p>
</div>

<!-- Edad Field -->
<div class="col-sm-12">
    <?php echo Form::label('edad', 'Edad:'); ?>

    <p><?php echo e($estudiante->edad); ?></p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo e($estudiante->created_at); ?></p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo e($estudiante->updated_at); ?></p>
</div>

<?php /**PATH C:\laragon\www\adminlte-generator\resources\views/estudiantes/show_fields.blade.php ENDPATH**/ ?>