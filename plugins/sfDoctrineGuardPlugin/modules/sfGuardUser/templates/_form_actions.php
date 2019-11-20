<!--Aqui se imprimen los botones del generatorHelper-->
<?php if ($form->isNew()) : ?>
  <table style="border-style: none;" class="table tbody data-table dataTable">
    <tbody>
      <tr>
        <?php echo $helper->linkToList(array('params' =>   array(),  'class_suffix' => 'save',  'label' => 'Volver a la lista',)) ?>
        <?php echo $helper->linkToSave($form->getObject(), array('params' =>   array(),  'class_suffix' => 'save',  'label' => 'Guardar',)) ?>
        <?php echo $helper->linkToSaveAndAdd($form->getObject(), array('params' =>   array(),  'class_suffix' => 'save_and_add',  'label' => 'Guardar y añadir',)) ?>
      </tr>
    <?php else : ?>
      <table style="border-style: none;" class="table tbody data-table dataTable">
        <tbody>
          <tr>   <!--ACOMODAR TITULO DE ACCIONES O BOTONES DE EDITAR Y BORRAR DE LAS ACCIONES-->
            <?php echo $helper->linkToDelete($form->getObject(), array('params' =>   array(),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Borrar',)) ?>
            <?php echo $helper->linkToList(array('params' =>   array(),  'class_suffix' => 'list',  'label' => 'Volver a la lista',)) ?>
            <?php echo $helper->linkToSave($form->getObject(), array('params' =>   array(),  'class_suffix' => 'save',  'label' => 'Guardar',)) ?>
            <?php echo $helper->linkToSaveAndAdd($form->getObject(), array('params' =>   array(),  'class_suffix' => 'save_and_add',  'label' => 'Guardar y añadir',)) ?>
          </tr>
        </tbody>
      </table>
    <?php endif; ?>

    </tbody>
  </table>