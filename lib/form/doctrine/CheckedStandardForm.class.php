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
    $opciones = array('n.a' => 'No aplica', 'true' => 'verdadero', 'false' => 'falso');
    if ($this->getObject()->getIsKillerQuestion()) {
      $opciones = array('true' => 'verdadero', 'false' => 'falso');
    }
    $this->widgetSchema['option_selected'] = new sfWidgetFormChoice(array('multiple' => false, 'expanded' => false, 'choices' => $opciones), array('class' => 'form-control'));
    $this->widgetSchema['option_selected']->setLabel($this->getObject()->getName());

    $this->useFields(['option_selected']);

    //Se llama a la funcion que guarda el dato de assigned_value
    $this->optselected();

    //se llama a la funcion efecty
    //$this->efecty();
  }

  

  //Funcion para comparar el valor de la opcion seleccionada para darle un valor al campo assigned_value
  public function optselected()
  {
    $assigvalue = 0;

    if (($this->getObject()->getOptionSelected()) == 'true') {
      $this->getObject()->setAssignedValue($this->getObject()->getFinalWeight());
    } else {
      $this->getObject()->setAssignedValue($assigvalue);
    }
  }

  //procedimiento para validar si un ikller_question es falsa para poner la checklist como no efectiva, poniendo el campo assessment en 0
  public function efecty()
  {
    $checkListId = $this->getValue('checklist_id');

    $checklistObject = CheckListTable::getCheckListById($checkListId); //Se busca en BD la checklist seleccionada

    if ($this->getObject()->getIsKillerQuestion() && ($this->getObject()->getOptionSelected()) == 'false') {
      $checklistObject->setAssessment($this->getObject()->getOptionSelected());
    }
  }
}
