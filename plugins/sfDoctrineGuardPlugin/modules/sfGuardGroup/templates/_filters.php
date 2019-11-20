<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php if ($form->hasGlobalErrors()) : ?>
        <?php echo $form->renderGlobalErrors() ?>
      <?php endif; ?>

      <form action="<?php echo url_for('sf_guard_group_collection', array('action' => 'filter')) ?>" method="post">
        <table cellspacing="0">
          <tfoot>
            <tr>
              <td colspan="2">
                <?php echo $form->renderHiddenFields() ?>
                <?php echo link_to(__('Reset', array(), 'sf_admin'), 'sf_guard_group_collection', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?>
                <input type="submit" value="<?php echo __('Filter', array(), 'sf_admin') ?>" />
              </td>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($configuration->getFormFilterFields($form) as $name => $field) : ?>
              <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
              <?php include_partial('sfGuardGroup/filters_field', array(
                  'name' => $name,
                  'attributes' => $field->getConfig('attributes', array()),
                  'label' => $field->getConfig('label'),
                  'help' => $field->getConfig('help'),
                  'form' => $form,
                  'field' => $field,
                  'class' => 'sf_admin_form_row sf_admin_' . strtolower($field->getType()) . ' sf_admin_filter_field_' . $name,
                )) ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
<script>
    $('.mydatepicker, #datepicker,.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>