<?php

/**
 * Template form.
 *
 * @package    check-list
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
class TemplateForm extends BaseTemplateForm
{
  public function configure()
  {
    $this->widgetSchema['name'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array( 'class' => 'form-control'));
    $this->widgetSchema['prefix'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
    $this->widgetSchema['threshold'] = new sfWidgetFormInputText(array(), array( 'class' => 'form-control'));
    $this->widgetSchema['status'] = new sfWidgetFormChoice(
      array(
          'choices' => array(1 => 'Activo', 0 => 'Inactivo'),
      ), array( 'class' => 'form-control'));

      $this->useFields(['name','description','prefix','threshold','status']);
  }
}
