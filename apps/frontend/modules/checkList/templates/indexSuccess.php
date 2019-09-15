<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-th"></i></span>
            <h5>Listado de CheckList</h5>
          </div>
          <div class="widget-content nopadding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
              <div class="">
              </div>
              <table class="table table-bordered data-table dataTable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Observations</th>
                    <th>Reference</th>
                    <th>Template</th>
                    <th>Responsible</th>
                    <th>Original threshold</th>
                    <th>Assessment</th>
                    <th>Status</th>
                    <th>Version at</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pager->getResults() as $check_list) : ?>
                    <tr>
                      <td><a href="<?php echo url_for('checkList/show?id=' . $check_list->getId()) ?>"><?php echo $check_list->getId() ?></a></td>
                      <td><?php echo $check_list->getName() ?></td>
                      <td><?php echo $check_list->getObservations() ?></td>
                      <td><?php echo $check_list->getReference() ?></td>
                      <td><?php echo $check_list->getTemplateId() ?></td>
                      <td><?php echo $check_list->getResponsibleId() ?></td>
                      <td><?php echo $check_list->getOriginalThreshold() ?></td>
                      <td><?php echo $check_list->getAssessment() ?></td>
                      <td><?php echo $check_list->getStatus() ?></td>
                      <td><?php echo $check_list->getVersionAt() ?></td>
                      <td><?php echo $check_list->getCreatedAt() ?></td>
                      <td><?php echo $check_list->getUpdatedAt() ?></td>
                    </tr>
                  <?php endforeach; ?>
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

<a href="<?php echo url_for('checkList/new') ?>">New</a>