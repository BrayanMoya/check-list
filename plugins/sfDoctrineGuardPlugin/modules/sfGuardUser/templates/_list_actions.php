<div class="dropdown-divider"></div>
<br>
<div style="height:80px; ">
<div data-toggle="tooltip" data-placement="top" title="Opciones" class="btn-group dropright">
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        <i class="fa fa-ellipsis-v"></i>
    </button>
    <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(119px, 0px, 0px); top: 0px; left: 0px; will-change: transform; border:hidden;">
        <a data-toggle="tooltip" data-placement="left" title="Nuevo usuario" href="<?php echo url_for('sfGuardUser/new') ?>" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></a>
        <button data-placement="left" title="Filtrar" type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#filterModal" data-whatever="@getbootstrap"><i class="fa fa-search"></i>
        </button>

    </div>
</div>

</div>