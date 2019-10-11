<?php

/**
 * sfGuardUser form.
 *
 * @package    check-list
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
      $this->widgetSchema['first_name'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
      $this->widgetSchema['last_name'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
      $this->widgetSchema['email_address'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
      $this->widgetSchema['username'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
      $this->widgetSchema['password'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
      $this->widgetSchema['is_active'] = new sfWidgetFormInputCheckbox(
        array(
            'choices' => array(1 => 'Si', 0 => 'No'),
        ), array( 'class' => 'form-control'));
        $this->widgetSchema['is_super_admin'] = new sfWidgetFormInputCheckbox(
        array(
            'choices' => array(1 => 'Si', 0 => 'No'),
        ), array( 'class' => 'form-control'));
        $this->widgetSchema['groups_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup'), array( 'class' => 'form-control'));
        $this->widgetSchema['permissions_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardPermission'), array( 'class' => 'form-control'));

    $this->useFields(['first_name', 'last_name', 'email_address', 'username', 'password', 'is_active', 'is_super_admin', 'groups_list', 'permissions_list']);
  }
}
