<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-th"></i></span>
            <h1>Listado de CheckList</h1>
          </div>
          <div class="widget-content nopadding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
              <div class="">
              </div>
              <table class="table stylish-table color-bordered-table muted-bordered-table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Observations</th>
                    <th>Template</th>
                    <th>Responsible</th>
                    <th>Original threshold</th>
                    <th>Assessment</th>
                    <th>Status</th>
                    <th>Version at</th>
                    <th>Acciones</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pager->getResults() as $check_list) : ?>
                    <tr>
                      <td><a href="<?php echo url_for('checkList/show?id=' . $check_list->getId()) ?>"><?php echo $check_list->getId() ?></a></td>
                      <td><?php echo $check_list->getName() ?></td>
                      <td><?php echo $check_list->getObservations() ?></td>
                      <td><?php echo $check_list->getTemplateId() ?></td>
                      <td><?php echo $check_list->getResponsibleId() ?></td>
                      <td><?php echo $check_list->getOriginalThreshold() ?></td>
                      <td><?php echo $check_list->getAssessment() ?></td>
                      <td><?php echo $check_list->getStatus() ?></td>
                      <td><?php echo $check_list->getVersionAt() ?></td>
                      <td><a href="<?php echo url_for('checkList/resolver?id=' . $check_list->getId()) ?>">Resolver</td>

                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <!--paginador-->
              <?php include_partial('pagination', array('pager' => $pager)) ?>

              <div class="dropdown-divider"></div>
              <br>

              <div data-toggle="tooltip" data-placement="top" title="Opciones" class="btn-group dropright">
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                  <i class="fa fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(119px, 0px, 0px); top: 0px; left: 0px; will-change: transform; border:hidden;">
                  <a data-toggle="tooltip" data-placement="bottom" title="Nueva checklist" href="<?php echo url_for('checkList/new') ?>" class="btn btn-info btn-circle "><i class="fa fa-plus"></i></a>
                  <button data-placement="left" title="Filtrar" type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#filterModal" data-whatever="@getbootstrap"><i class="fa fa-search"></i>
                  </button>

                </div>
                <?php //include_partial('filter', array( 'url' => 'template/index', 'formFilter' => $formFilter))
                ?>
                <?php include_partial('form_filter', array('formFilter' => $formFilter, 'url' => 'checkList/index')) ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  boton flotante de julian (que no sirve)

<div class="fab"></div>
<div class="trigger text-white bg-info"><i class="fa fa-ellipsis-v"></i></div>
<div class="actions">
  <div class="action">
    <a data-toggle="tooltip" data-placement="left" title="Nueva lista de tareas" href="<?php echo url_for('checkList/new') ?>" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></a>
  </div>
  <div class="action">
    <button data-placement="left" title="Filtrar" type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#filterModal" data-whatever="@getbootstrap"><i class="fa fa-search"></i>
    </button>
  </div>
</div>
-->
<?php include_partial('form_filter', array('formFilter' => $formFilter, 'url' => 'checkList/index')) ?>