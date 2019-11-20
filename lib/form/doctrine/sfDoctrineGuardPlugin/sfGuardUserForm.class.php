<?php

/**
 * sfGuardUser form.
 *
 * @package    check-list
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
class sfGuardUserForm extends BasesfGuardUserForm
{
  public function configure()
  {
    foreach ($this->getWidgetSchema()->getFields() as $field) {
      $field->setAttribute('class', 'form-control');
    }
    $this->widgetSchema['is_active'] = new sfWidgetFormInputCheckbox(
      array(
        'expanded' => true,
        'choices' => array(1 => 'Si', 0 => 'No'),
        array('type' => 'checkbox')),
      
    );
    $this->widgetSchema['is_super_admin'] = new sfWidgetFormInputCheckbox(
      array(
        'choices' => array(1 => 'Si', 0 => 'No'),
      )
    );

    sfWidgetFormSchema::setDefaultFormFormatterName('custom');

    $this->widgetSchema['first_name']->setLabel('Nombre');
    $this->widgetSchema['last_name']->setLabel('Apellido');
    $this->widgetSchema['email_address']->setLabel('Email');
    $this->widgetSchema['username']->setLabel('Usuario');
    $this->widgetSchema['password']->setLabel('Contraseña');
    $this->widgetSchema['password_again']->setLabel('Repite la Contraseña');
    $this->widgetSchema['is_active']->setLabel('Activo');
    $this->widgetSchema['is_super_admin']->setLabel('Super admin');
    $this->widgetSchema['groups_list']->setLabel('Grupos');
    $this->widgetSchema['permissions_list']->setLabel('Permisos');
  }
}
