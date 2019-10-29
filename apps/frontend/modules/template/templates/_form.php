<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="floating-labels m-t-40" action="<?php echo url_for('template/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()) : ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <div class="row">
    <div class="col-md-12">
      <ul class="error_list">
        <?php foreach ($form->getGlobalErrors() as $name => $error) : ?>
          <li><?php echo $name . ': ' . $error ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="form-group col-md-12 col-md-offset-3 <?php echo $form['name']->hasError() ? 'has-error' : '' ?>">
      <?php echo $form['name'] ?>
      <span class="bar"></span>
      <?php echo $form['name']->renderLabel() ?>
      <?php echo $form['name']->renderError() ?>
    </div>

    <div class="form-group col-md-12 col-md-offset-3 <?php echo $form['description']->hasError() ? 'has-error' : '' ?>">
      <?php echo $form['description'] ?>
      <span class="bar"></span>
      <?php echo $form['description']->renderLabel() ?>
      <?php echo $form['description']->renderError() ?>
    </div>

    <div class="form-group col-md-12 col-md-offset-3 <?php echo $form['prefix']->hasError() ? 'has-error' : '' ?>">
      <?php echo $form['prefix'] ?>
      <span class="bar"></span>
      <?php echo $form['prefix']->renderLabel() ?>
      <?php echo $form['prefix']->renderError() ?>
    </div>

    <div class="form-group col-md-12 col-md-offset-3 <?php echo $form['threshold']->hasError() ? 'has-error' : '' ?>">
      <?php echo $form['threshold'] ?>
      <span class="bar"></span>
      <?php echo $form['threshold']->renderLabel() ?>
      <?php echo $form['threshold']->renderError() ?>
    </div>

    <div class="form-group col-md-12 col-md-offset-3 <?php echo $form['status']->hasError() ? 'has-error' : '' ?>">
      <?php echo $form['status'] ?>
      <span class="bar"></span>
      <?php echo $form['status']->renderLabel() ?>
      <?php echo $form['status']->renderError() ?>
    </div>
    <div class="col-md-12">
      <?php echo $form->renderHiddenFields() ?>
    </div>
  </div>
  <table class="table table-bordered data-table dataTable">
    <tbody>
      <tr>
        <div class="row">
          <div class="col m12">
            <td>&nbsp;<a href="<?php echo url_for('template/index') ?>">Volver a la lista</a>
              <?php if (!$form->getObject()->isNew()) : ?></td>
            <td>&nbsp;<?php echo link_to('Borrar', 'template/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></td>
          <?php endif; ?>
          <td><input type="submit" value="Guardar" /></td>
          </div>
        </div>
      </tr>
    </tbody>
  </table>
</form>