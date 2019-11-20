<!--Botones editar y borrar de la tabla de usuarios-->
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($sf_guard_user, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Editar',)) ?>
    <?php echo $helper->linkToDelete($sf_guard_user, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Borrar',)) ?>
  </ul>
