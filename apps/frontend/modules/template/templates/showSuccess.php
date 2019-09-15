<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-th"></i></span>
            <h5>Listado de Templates</h5>
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
                    <th>Name:</th>
                    <td><?php echo $template->getName() ?></td>
                  </tr>
                  <tr>
                    <th>Description:</th>
                    <td><?php echo $template->getDescription() ?></td>
                  </tr>
                  <tr>
                    <th>Prefix:</th>
                    <td><?php echo $template->getPrefix() ?></td>
                  </tr>
                  <tr>
                    <th>Threshold:</th>
                    <td><?php echo $template->getThreshold() ?></td>
                  </tr>
                  <tr>
                    <th>Checklists qt:</th>
                    <td><?php echo $template->getChecklistsQt() ?></td>
                  </tr>
                  <tr>
                    <th>Status:</th>
                    <td><?php echo $template->getStatus() ?></td>
                  </tr>
                  <tr>
                    <th>Created at:</th>
                    <td><?php echo $template->getCreatedAt() ?></td>
                  </tr>
                  <tr>
                    <th>Updated at:</th>
                    <td><?php echo $template->getUpdatedAt() ?></td>
                  </tr>
                </tbody>
              </table>

              <hr />

              <a href="<?php echo url_for('template/edit?id=' . $template->getId()) ?>">Edit</a>
              &nbsp;
              <a href="<?php echo url_for('template/index') ?>">List</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>