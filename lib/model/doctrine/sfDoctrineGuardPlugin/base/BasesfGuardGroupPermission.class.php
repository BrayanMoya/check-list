<?php

/**
 * BasesfGuardGroupPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                     $group_id                             Type: integer, primary key
 * @property int                     $permission_id                        Type: integer, primary key
 * @property sfGuardGroup            $Group                                
 * @property sfGuardPermission       $Permission                           
 *  
 * @method int                       getGroupId()                          Type: integer, primary key
 * @method int                       getPermissionId()                     Type: integer, primary key
 * @method sfGuardGroup              getGroup()                            
 * @method sfGuardPermission         getPermission()                       
 *  
 * @method sfGuardGroupPermission    setGroupId(int $val)                  Type: integer, primary key
 * @method sfGuardGroupPermission    setPermissionId(int $val)             Type: integer, primary key
 * @method sfGuardGroupPermission    setGroup(sfGuardGroup $val)           
 * @method sfGuardGroupPermission    setPermission(sfGuardPermission $val) 
 *  
 * @package    check-list
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardGroupPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_group_permission');
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('permission_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardGroup as Group', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardPermission as Permission', array(
             'local' => 'permission_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}