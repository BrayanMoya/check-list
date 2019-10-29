<?php

/**
 * BaseCheckedStandard
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int              $id                            Type: integer, primary key
 * @property string           $name                          Type: string(255)
 * @property string           $description                   Type: clob
 * @property string           $standard_type                 Type: string(255)
 * @property int              $checklist_id                  Type: integer
 * @property double           $final_weight                  Type: double
 * @property string           $option_selected               Type: string(255)
 * @property double           $assigned_value                Type: double
 * @property bool             $is_killer_question            Type: boolean
 * @property CheckList        $CheckList                     
 *  
 * @method int                getId()                        Type: integer, primary key
 * @method string             getName()                      Type: string(255)
 * @method string             getDescription()               Type: clob
 * @method string             getStandardType()              Type: string(255)
 * @method int                getChecklistId()               Type: integer
 * @method double             getFinalWeight()               Type: double
 * @method string             getOptionSelected()            Type: string(255)
 * @method double             getAssignedValue()             Type: double
 * @method bool               getIsKillerQuestion()          Type: boolean
 * @method CheckList          getCheckList()                 
 *  
 * @method CheckedStandard    setId(int $val)                Type: integer, primary key
 * @method CheckedStandard    setName(string $val)           Type: string(255)
 * @method CheckedStandard    setDescription(string $val)    Type: clob
 * @method CheckedStandard    setStandardType(string $val)   Type: string(255)
 * @method CheckedStandard    setChecklistId(int $val)       Type: integer
 * @method CheckedStandard    setFinalWeight(double $val)    Type: double
 * @method CheckedStandard    setOptionSelected(string $val) Type: string(255)
 * @method CheckedStandard    setAssignedValue(double $val)  Type: double
 * @method CheckedStandard    setIsKillerQuestion(bool $val) Type: boolean
 * @method CheckedStandard    setCheckList(CheckList $val)   
 *  
 * @package    check-list
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCheckedStandard extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('checked_standard');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('standard_type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('checklist_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('final_weight', 'double', null, array(
             'type' => 'double',
             ));
        $this->hasColumn('option_selected', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('assigned_value', 'double', null, array(
             'type' => 'double',
             ));
        $this->hasColumn('is_killer_question', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('CheckList', array(
             'local' => 'checklist_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}