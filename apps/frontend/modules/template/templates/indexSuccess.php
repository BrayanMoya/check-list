<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-th"></i></span>
            <h1>Lista de plantillas</h1>
          </div>
          <div style="height:220px; " class="widget-content nopadding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
              <div class="">
              </div>

              <table class="table table-hover data-table dataTable">

                <thead>
                  <tr>
                    <th>
                      <h3>Id</h3>
                    </th>
                    <th>
                      <h3>Nombre</h3>
                    </th>
                    <th>
                      <h3>Descripcion</h3>
                    </th>
                    <th>
                      <h3>Prefijo</h3>
                    </th>
                    <th>
                      <h3>Rango</h3>
                    </th>
                    <th>
                      <h3>Checklists_qt</h3>
                    </th>
                    <th>
                      <h3>Estado</h3>
                    </th>
                    <th>
                      <h3>Creado</h3>
                    </th>
                    <th>
                      <h3>Actualizado</h3>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pager->getResults() as $template) : ?>
                    <tr>
                      <td><a href="<?php echo url_for('template/show?id=' . $template->getId()) ?>"><?php echo $template->getId() ?></a></td>
                      <td><?php echo $template->getName() ?></td>
                      <td><?php echo $template->getDescription() ?></td>
                      <td><?php echo $template->getPrefix() ?></td>
                      <td><?php echo $template->getThreshold() ?></td>
                      <td><?php echo $template->getChecklistsQt() ?></td>
                      <td><?php echo $template->getStatus() ?></td>
                      <td><?php echo $template->getCreatedAt() ?></td>
                      <td><?php echo $template->getUpdatedAt() ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <div class="dropdown-divider"></div>
              <br>
              <div data-toggle="tooltip" data-placement="top" title="Opciones" class="btn-group dropright">
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                  <i class="fa fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(119px, 0px, 0px); top: 0px; left: 0px; will-change: transform; border:hidden;">
                  <a data-toggle="tooltip" data-placement="bottom" title="Nueva plantilla" href="<?php echo url_for('template/new') ?>" class="btn btn-info btn-circle "><i class="fa fa-plus"></i></a>
                  <button data-placement="left" title="Filtrar" type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#filterModal" data-whatever="@getbootstrap"><i class="fa fa-search"></i>
                  </button>

                </div>
                <?php //include_partial('filter', array( 'url' => 'template/index', 'formFilter' => $formFilter))
                ?>
                <?php include_partial('checkList/form_filter', array('url' => 'template/index', 'formFilter' => $formFilter)) ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_partial('pagination', array('pager' => $pager)) ?>