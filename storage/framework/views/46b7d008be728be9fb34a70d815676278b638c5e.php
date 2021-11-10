<li class="nav-item">
    <a href="<?php echo e(route('estudiantes.index')); ?>"
       class="nav-link <?php echo e(Request::is('estudiantes*') ? 'active' : ''); ?>">
        <p>Estudiantes</p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo e(route('maestros.index')); ?>"
       class="nav-link <?php echo e(Request::is('maestros*') ? 'active' : ''); ?>">
        <p>Maestros</p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo e(route('cursos.index')); ?>"
       class="nav-link <?php echo e(Request::is('cursos*') ? 'active' : ''); ?>">
        <p>Cursos</p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo e(route('padres.index')); ?>"
       class="nav-link <?php echo e(Request::is('padres*') ? 'active' : ''); ?>">
        <p>Padres</p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo e(route('gestionNotas.index')); ?>"
       class="nav-link <?php echo e(Request::is('gestionNotas*') ? 'active' : ''); ?>">
        <p>Gestion Notas</p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo e(route('asignacionCursos.index')); ?>"
       class="nav-link <?php echo e(Request::is('asignacionCursos*') ? 'active' : ''); ?>">
        <p>Asignacion Cursos</p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo e(route('reportes.index')); ?>"
       class="nav-link <?php echo e(Request::is('reportes*') ? 'active' : ''); ?>">
        <p>Reportes</p>
    </a>
</li>


<?php /**PATH C:\laragon\www\adminlte-generator\resources\views/layouts/menu.blade.php ENDPATH**/ ?>