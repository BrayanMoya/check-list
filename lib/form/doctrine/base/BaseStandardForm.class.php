<?php

/**
 * Standard form base class.
 *
 * @method Standard getObject() Returns the current form's model object
 *
 * @package    check-list
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
abstract class BaseStandardForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'template_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Template'), 'add_empty' => false)),
      'weight'             => new sfWidgetFormInputText(),
      'is_killer_question' => new sfWidgetFormInputHidden(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255)),
      'description'        => new sfValidatorString(array('required' => false)),
      'template_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Template'), 'column' => 'id')),
      'weight'             => new sfValidatorPass(array('required' => false)),
      'is_killer_question' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('is_killer_question')), 'empty_value' => $this->getObject()->get('is_killer_question'), 'required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('standard[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Standard';
  }

}
