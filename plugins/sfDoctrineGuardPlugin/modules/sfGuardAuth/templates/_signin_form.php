<?php use_helper('I18N') ?>

<form id="loginform" class="form-vertical" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <div class="row">
  <div class="control-group normal_text"> <h3><img src="" alt="Logo" /></h3></div>
    <div class="col-md-12">
      <ul class="error_list">
        <?php foreach ($form->getGlobalErrors() as $name => $error) : ?>
          <li><?php echo $name . ': ' . $error ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <table class="table table-bordered data-table dataTable">
      <tbody>
          <?php echo $form ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2">
            <input type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" />

            <?php $routes = $sf_context->getRouting()->getRoutes() ?>
            <?php if (isset($routes['sf_guard_forgot_password'])) : ?>
              <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
            <?php endif; ?>

            <?php if (isset($routes['sf_guard_register'])) : ?>
              &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
            <?php endif; ?>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</form>