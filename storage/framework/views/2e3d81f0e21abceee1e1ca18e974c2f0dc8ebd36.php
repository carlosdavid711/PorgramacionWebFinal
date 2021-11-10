<!-- Usuario Padre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Usuario_Padre', 'Usuario Padre:'); ?>

    <?php echo Form::text('Usuario_Padre', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Completo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Nombre_Completo', 'Nombre Completo:'); ?>

    <?php echo Form::text('Nombre_Completo', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Telefono', 'Telefono:'); ?>

    <?php echo Form::text('Telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Correo Eletronico Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Correo_eletronico', 'Correo Eletronico:'); ?>

    <?php echo Form::email('Correo_eletronico', null, ['class' => 'form-control']); ?>

</div><?php /**PATH C:\laragon\www\adminlte-generator\resources\views/padres/fields.blade.php ENDPATH**/ ?>