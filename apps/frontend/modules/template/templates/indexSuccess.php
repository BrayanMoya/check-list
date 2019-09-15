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
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Prefix</th>
                    <th>Threshold</th>
                    <th>Checklists qt</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($templates as $template) : ?>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_partial('pagination', array('pager' => $pager)) ?>

<a href="<?php echo url_for('template/new') ?>">New</a>
<a href="<?php echo url_for('template/newCriterion') ?>">New Criterion</a>