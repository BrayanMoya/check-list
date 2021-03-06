<?php

/**
 * CheckedStandardTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CheckedStandardTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return CheckedStandardTable The table instance
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('CheckedStandard');
  }

  /**
   * @param $checkListId
   * @param bool $criterionToExclude
   * @return mixed
   */
  public static function sumWeightByCheckList($checkListId, $criterionToExclude = false)
  {
    $query = Doctrine_Query::create()->select('c.id, SUM(c.final_weight) as total')->from('CheckedStandard c')->where(
      'c.checklist_id = ?',
      $checkListId
    );

    if ($criterionToExclude) {
      $query->andWhereNotIn('c.id', [$criterionToExclude]);
    }

    return $query->fetchOne()->getTotal();
  }

  /**
   * @param $checkListId
   * @param int $hydrationMode
   * @return Doctrine_Collection
   * @throws Doctrine_Query_Exception
   */
  public function getCriteriasByCheckList($checkListId, $hydrationMode = 2)
  {
    $query = Doctrine_Query::create()
      ->from('CheckedStandard c')
      ->where('c.checklist_id = ?', $checkListId);

    return $query->execute(null, $hydrationMode);
  }

  public function getOptionTrue($hydrationMode = 2)
  {
    $query = Doctrine_Query::create()
      ->from('CheckedStandard c')
      ->where('c.option_selected = ?', 'true');

    return $query->execute(null, $hydrationMode);
  }

  public static function getCheckedStandardId($id)
  {
    $query = Doctrine_Query::create()
      ->from('CheckedStandard c')
      ->where('c.id = ?', $id);
    return $query->fetchOne();
  }
}
