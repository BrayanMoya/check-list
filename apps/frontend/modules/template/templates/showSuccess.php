<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-th"></i></span>
            <h5>Listado de Plantillas</h5>
          </div>
          <div class="widget-content nopadding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
              <div class="">
              </div>
              <table class="table table-bordered data-table dataTable">
                <tbody>
                  <tr>
                    <th>Id:</th>
                    <td><?php echo $template->getId() ?></td>
                  </tr>
                  <tr>
                    <th>Nombre:</th>
                    <td><?php echo $template->getName() ?></td>
                  </tr>
                  <tr>
                    <th>Descripcion:</th>
                    <td><?php echo $template->getDescription() ?></td>
                  </tr>
                  <tr>
                    <th>Prefijo:</th>
                    <td><?php echo $template->getPrefix() ?></td>
                  </tr>
                  <tr>
                    <th>Meta:</th>
                    <td><?php echo $template->getThreshold() ?></td>
                  </tr>
                  <tr>
                    <th>Checklists relacionados:</th>
                    <td><?php echo $template->getChecklistsQt() ?></td>
                  </tr>
                  <tr>
                    <th>Estado:</th>
                    <td><?php echo $template->getStatus() ?></td>
                  </tr>
                  <tr>
                    <th>Creado:</th>
                    <td><?php echo $template->getCreatedAt() ?></td>
                  </tr>
                  <tr>
                    <th>Actualizado:</th>
                    <td><?php echo $template->getUpdatedAt() ?></td>
                  </tr>
                </tbody>
              </table>

              <hr />
              <table class="table table-bordered data-table dataTable">
                <tbody>
                  <tr>
                    <td><a class="btn btn-light" href="<?php echo url_for('template/edit?id=' . $template->getId()) ?>">Editar</a></td>
                    &nbsp;
                    <td><a class="btn btn-light" href="<?php echo url_for('template/index') ?>">Listar</a></td>
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