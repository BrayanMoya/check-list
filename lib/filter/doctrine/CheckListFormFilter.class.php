<?php

/**
 * CheckList filter form.
 *
 * @package    check-list
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id$
 */
class CheckListFormFilter extends BaseCheckListFormFilter
{
  public function configure()
  {
    foreach ($this->getWidgetSchema()->getFields() as $field)
      {
          $field->setAttribute('class', 'form-control');
      }
      $this->widgetSchema['created_at']  =  new sfWidgetFormFilterInput(
          array('with_empty' => false),
          array('class' => 'form-control datepicker'));
      sfWidgetFormSchema::setDefaultFormFormatterName('custom');

      $this->widgetSchema['name']->setLabel('Nombre');
      $this->widgetSchema['observations']->setLabel('Observaciones');
      $this->widgetSchema['reference']->setLabel('Referencia');
      $this->widgetSchema['template_id']->setLabel('Template');
      $this->widgetSchema['responsible_id']->setLabel('Responsable');
      $this->widgetSchema['original_threshold']->setLabel('Meta');
      $this->widgetSchema['assessment']->setLabel('Resultado');
      $this->widgetSchema['status']->setLabel('Estado');
      $this->widgetSchema['version_at']->setLabel('Versionado en');
      $this->widgetSchema['created_at']->setLabel('Creado en');
      $this->widgetSchema['updated_at']->setLabel('Actualizado en');
      

  }
}
