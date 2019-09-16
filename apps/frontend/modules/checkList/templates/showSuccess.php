<div id="content">
  <div id="content-header">
  
  </div>
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
                <tbody>
                  <tr>
                    <th>Id:</th>
                    <td><?php echo $check_list->getId() ?></td>
                  </tr>
                  <tr>
                    <th>Name:</th>
                    <td><?php echo $check_list->getName() ?></td>
                  </tr>
                  <tr>
                    <th>Observations:</th>
                    <td><?php echo $check_list->getObservations() ?></td>
                  </tr>
                  <tr>
                    <th>Reference:</th>
                    <td><?php echo $check_list->getReference() ?></td>
                  </tr>
                  <tr>
                    <th>Template:</th>
                    <td><?php echo $check_list->getTemplateId() ?></td>
                  </tr>
                  <tr>
                    <th>Responsible:</th>
                    <td><?php echo $check_list->getResponsibleId() ?></td>
                  </tr>
                  <tr>
                    <th>Original threshold:</th>
                    <td><?php echo $check_list->getOriginalThreshold() ?></td>
                  </tr>
                  <tr>
                    <th>Assessment:</th>
                    <td><?php echo $check_list->getAssessment() ?></td>
                  </tr>
                  <tr>
                    <th>Status:</th>
                    <td><?php echo $check_list->getStatus() ?></td>
                  </tr>
                  <tr>
                    <th>Version at:</th>
                    <td><?php echo $check_list->getVersionAt() ?></td>
                  </tr>
                  <tr>
                    <th>Created at:</th>
                    <td><?php echo $check_list->getCreatedAt() ?></td>
                  </tr>
                  <tr>
                    <th>Updated at:</th>
                    <td><?php echo $check_list->getUpdatedAt() ?></td>
                  </tr>
                </tbody>
              </table>

              <hr />
              <table class="table table-bordered data-table dataTable">
                <tbody>
                  <tr>
                    <td><a href="<?php echo url_for('checkList/edit?id=' . $check_list->getId()) ?>">Edit</a></td>
                    &nbsp;
                    <td><a href="<?php echo url_for('checkList/index') ?>">List</a></td>
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