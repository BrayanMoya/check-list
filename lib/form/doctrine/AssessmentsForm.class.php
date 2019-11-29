<?php

/**
 * Assessments form.
 *
 * @package    check-list
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
class AssessmentsForm extends BaseAssessmentsForm
{
  public function configure()
  {
    save($con);
  }

  public function save($con = null)
  {
    //Obtenemos la checklist que se esta resolviendo
    $checkListId = $this->getValue('checklist_id');

    /** @var  $checklistObject Template */
    $checklistObject = CheckListTable::getCheckListById($checkListId); //Se busca en BD la checklist seleccionada
    $standardWeight = CheckedStandardTable::sumWeightByCheckList($checkListId); //Se busca en BD la checklist seleccionada


    // Estamos copiando el id de la checklist que se resuelve
    $this->getObject()->setId($checklistObject->getId());

    // Estamos copiando la referencia de la checklist
    $this->getObject()->setReference($checklistObject->getReference());

    // Estamos copiando el valor asignado total de la checklist resuelta
    $this->getObject()->setValue($standardWeight->getFinalWeight());

    

    // llamamos el método de la clase padre para que guarde en base de datos nuestro nuevo resultado final
    return parent::save($con);
  }


}
