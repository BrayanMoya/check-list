<?php

/**
 * CheckList form.
 *
 * @package    check-list
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
class CheckListForm extends BaseCheckListForm
{
  public function configure()
  {
    $this->widgetSchema['name'] = new sfWidgetFormInputText(array(), array('class' => 'form-control'));
    $this->widgetSchema['observations'] = new sfWidgetFormTextarea(array(), array('class' => 'form-control'));
    $this->widgetSchema['reference']        = new sfWidgetFormInputText(array(), array('class' => 'form-control'));
    $this->widgetSchema['template_id']       = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Template'), 'add_empty' => false), array('class' => 'form-control'));
    $this->widgetSchema['responsible_id']    = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Responsible'), 'add_empty' => false), array('class' => 'form-control'));

    $this->widgetSchema['status'] = new sfWidgetFormChoice(
      array(
        'choices' => array(1 => 'Activo', 0 => 'Inactivo'),
      ),
      array('class' => 'form-control')
    );

    $this->useFields(['name', 'reference', 'observations', 'template_id', 'responsible_id', 'status']);
  }

  public function save($con = null)
  {
    $templateID = $this->getValue('template_id');

    /** @var  $templateObject Template */
    $templateObject = TemplateTable::getTemplateById($templateID); //Se busca en BD la plantilla seleccionada

    // Estamos copiando el valor del campo de meta de la plantilla y se lo estamos pasando a la lista de chequeo
    $this->getObject()->setOriginalThreshold($templateObject->getThreshold());

    // llamamos el método que realiza la copia de los criterios de la plantilla retornando una nueva colección
    $newStandards = $this->copyStandards($templateObject->getStandards());

    // relacionamos la nueva lista de criterios con la lista de chequeo que estamos creando
    $this->getObject()->setCheckedStandards($newStandards);

    // llamamos el método de la clase padre para que guarde en base de datos nuestra nueva lista de chequeo
    return parent::save($con);
    /**
    $standarList = $templateObject->getStandards();

    $checkListObject = $this->getObject();
    var_dump($checkListObject);
    exit;
    foreach ($standarList as $standard) {
      $checkedStandard = new CheckedStandard();
      $checkedStandard->setName($standard->getName());
      $checkedStandard->setDescription($standard->getDescription());
      $checkedStandard->setFinalWeight($standard->getWeight());
      $checkedStandard->setChecklistId($this->getObject()->getId());
      $checkedStandard->save();
    }

    $checkListObject = $this->getObject();
    $checkListObject->setOriginalThreshold($templateObject->getThreshold());
    $checkListObject->save();
    return parent::save($con);
     */
  }

  /**
   * Este método recibe una coleción de criterios  y retorna una nueva colección
   * Copia los registros de la tabla standard y los lleva a la tabla Checked_standard
   */
  private function copyStandards(Doctrine_Collection $standards)
  {
    // creamos una nueva colección de la tabla checked_standard
    $newListStandard = new Doctrine_Collection('CheckedStandard');
    /** @var  $standard  Standard */
    foreach ($standards as $standard) {

      $checkedStandard = new CheckedStandard();
      // copiamos el nombre del criterio
      $checkedStandard->setName($standard->getName());
      // copiamos la descripcion del criterio
      $checkedStandard->setDescription($standard->getDescription());
      // copiamos el peso del criterio
      $checkedStandard->setFinalWeight($standard->getWeight());
      // copiamos la killer_question del criterio
      $checkedStandard->setIsKillerQuestion($standard->getIsKillerQuestion());
      // creamos la relacion entre las tablas check_list y checked_standard
      // esta relación es obligatoria ya que al no hacerla podemos generar un error a nivel de base de datos
      $checkedStandard->setCheckList($this->getObject());
      //añadimos el nuevo registro a la colleccion
      $newListStandard->add($checkedStandard);
    }
    return $newListStandard;
  }
}
