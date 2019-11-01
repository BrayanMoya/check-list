<?php

/**
 * Criteria form.
 *
 * @package    check-list
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
class CheckedStandardForm extends BaseCheckedStandardForm
{
  public function configure()
  {
    $opciones=array('n.a' => 'No aplica', 'true' => 'verdadero', 'false' => 'falso');
    if ($this->getObject()->getIsKillerQuestion()){
      $opciones=array('true' => 'verdadero', 'false' => 'falso');
    }
    $this->widgetSchema['option_selected'] = new sfWidgetFormChoice(array('multiple' => false, 'expanded' => false, 'choices' => $opciones), array('class' => 'form-control'));
    $this->widgetSchema['option_selected']->setLabel($this->getObject()->getName());
    

        
    $this->useFields(['option_selected']);



  }
}
