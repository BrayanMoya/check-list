<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="row">
  <div class="col-sm-12">
    <?php echo form_tag_for($form, '@sf_guard_group', array('class' => 'form-control general')) ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()) : ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php echo $form ?>

    <?php include_partial('sfGuardGroup/form_actions', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </form>
  </div>
</div>