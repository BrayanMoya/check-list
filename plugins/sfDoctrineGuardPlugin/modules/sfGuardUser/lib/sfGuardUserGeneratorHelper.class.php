<?php

//LINKS Y BOTONES PARA MODULO USUARIOS

/**
 * sfGuardUser module helper.
 *
 * @package    sfGuardPlugin
 * @subpackage sfGuardUser
 * @author     Fabien Potencier
 * @version    SVN: $Id: sfGuardUserGeneratorHelper.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfGuardUserGeneratorHelper extends BaseSfGuardUserGeneratorHelper
{
  public function linkToNew($params)
  {
    return '<li class="sf_admin_action_new">' . link_to(__($params['label'], array(), 'sf_admin'), '@' . $this->getUrlForAction('new')) . '</li>';
  }

  public function linkToEdit($object, $params)
  {
    return '<td class="sf_admin_action_edit">' . link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object) . '</td>';
  }

  /**
   * @param Persistent|mixed $object
   * @param array $params
   * @return string
   */
  public function linkToDelete($object, $params)
  {
    if ($object->isNew()) {
      return '';
    }

    return '<td class="sf_admin_action_delete" >' . link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm'])) . '</td>';
  }

  public function linkToList($params)//SEGUIR CON LOS BOTONES DEL FILTRO
  {
    return '<td class="sf_admin_action_list">' . link_to(__($params['label'], array(), 'sf_admin'), '@' . $this->getUrlForAction('list')) . '</td>';
  }

  public function linkToSave($object, $params)
  {
    return '<td class="sf_admin_action_save"><input class="btn-success btn-themecolor btn-rounded" type="submit" value="' . __($params['label'], array(), 'sf_admin') . '" /></td>';
  }

  /**
   * @param Persistent|mixed $object
   * @param array $params
   * @return string
   */
  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew()) {
      return '';
    }

    return '<td class="sf_admin_action_save_and_add"><input class="btn-success btn-themecolor btn-rounded" type="submit" value="' . __($params['label'], array(), 'sf_admin') . '" name="_save_and_add" /></td>';
  }
}
