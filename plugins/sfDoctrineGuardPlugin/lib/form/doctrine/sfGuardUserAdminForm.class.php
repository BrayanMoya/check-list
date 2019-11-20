<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    foreach ($this->getWidgetSchema()->getFields() as $field) {
      $field->setAttribute('class', 'form-control');
    }
    $this->widgetSchema['is_active'] = new sfWidgetFormChoice(array(
      'multiple' => 'true',
      'expanded' => true,
      'choices' => array(1 => 'Activo', 0=> 'Inactivo')
    ),
      array('class' => 'checkbox checkbox-primary')
    );
    

    $this->widgetSchema['is_super_admin'] = new sfWidgetFormChoice(array(
      'multiple' => 'true',
      'expanded' => true,
      'choices' => array(1 => 'Si', 0=> 'No')
    ),
      array('class' => 'checkbox checkbox-primary')
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
