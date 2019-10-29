<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-th"></i></span>
            <h1>Lista de plantillas</h1>
          </div>
          <div class="widget-content nopadding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
              <div class="">
              </div>
              <?php include_partial('filter', array('url' => 'template/index', 'formFilter' => $formFilter)) ?>

              <table class="table table-bordered data-table dataTable">

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

              <table class="table table-bordered data-table dataTable">
                <tbody>
                  <tr>
                    <td><a href="<?php echo url_for('template/new') ?>">Nueva</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_partial('pagination', array('pager' => $pager)) ?>