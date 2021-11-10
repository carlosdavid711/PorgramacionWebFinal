<!-- Carnet Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Carnet', 'Carnet:'); ?>

    <?php echo Form::number('Carnet', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Completo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Nombre_Completo', 'Nombre Completo:'); ?>

    <?php echo Form::text('Nombre_Completo', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Fecha_Nacimiento', 'Fecha Nacimiento:'); ?>

    <?php echo Form::text('Fecha_Nacimiento', null, ['class' => 'form-control','id'=>'Fecha_Nacimiento']); ?>

</div>

<?php $__env->startPush('page_scripts'); ?>
    <script type="text/javascript">
        $('#Fecha_Nacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('edad', 'Edad:'); ?>

    <?php echo Form::text('edad', null, ['class' => 'form-control']); ?>

</div><?php /**PATH C:\laragon\www\adminlte-generator\resources\views/maestros/fields.blade.php ENDPATH**/ ?>