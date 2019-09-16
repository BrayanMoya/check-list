<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-th"></i></span>
            <h1>Templates List</h1>
          </div>
          <div class="widget-content nopadding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
              <div class="">
              </div>
              <table class="table table-bordered data-table dataTable">
                <thead>
                  <tr>
                    <th><h3>Id</h3></th>
                    <th><h3>Name</h3></th>
                    <th><h3>Description</h3></th>
                    <th><h3>Prefix</h3></th>
                    <th><h3>Threshold</h3></th>
                    <th><h3>Checklists_qt</h3></th>
                    <th><h3>Status</h3></th>
                    <th><h3>Created at</h3></th>
                    <th><h3>Updated at</h3></th>
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
                    <td><a href="<?php echo url_for('template/new') ?>">New</a></td>
                    <td><a href="<?php echo url_for('template/newCriterion') ?>">New Criterion</a></td>
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