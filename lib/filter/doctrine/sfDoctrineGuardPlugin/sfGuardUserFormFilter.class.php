<?php

/**
 * sfGuardUser filter form.
 *
 * @package    check-list
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id$
 */
class sfGuardUserFormFilter extends BasesfGuardUserFormFilter
{
  public function configure()
  {
    foreach ($this->getWidgetSchema()->getFields() as $field) {
      $field->setAttribute('class', 'form-control');
    }
    sfWidgetFormSchema::setDefaultFormFormatterName('custom');

    $this->widgetSchema['first_name']->setLabel('Nombre');
    $this->widgetSchema['last_name']->setLabel('Apellido');
    $this->widgetSchema['email_address']->setLabel('Email');
    $this->widgetSchema['username']->setLabel('Usuario');

    //BUSCAR BOTONES DE FILTRO DE USUARIOS


  }
}
