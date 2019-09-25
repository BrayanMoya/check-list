<?php

use PHPUnit\Framework\TestCase;

include dirname(__FILE__) . '/../../bootstrap/doctrine.php';
/**
 * Created by PhpStorm.
 * User: Gaviria
 * Date: 12/09/2019
 * Time: 11:41 AM
 */

class CheckListTest extends TestCase
{
  private $object;

  protected function setUp()
  {
    $this->object = new CheckList();
  }

  protected function tearDown()
  {
    $this->object = null;
  }

  public function testGetNameWithPrefix()
  {
    $result = $this->object->getCheckListById(1);

    $this->assertEquals('list test 1', $result);
  }

  public function testGetActiveCheckListInArray()
  {
    // Remove the following lines when you implement this test.
    //$this->markTestIncomplete(
    //'This test has not been implemented yet.'
    //);
    $result = $this->object->getActiveCheckListInArray(1);

    $this->assertCount(2, $result);
  }

  public function testGetInactiveCheckListInArray()
  {
    // Remove the following lines when you implement this test.
    //$this->markTestIncomplete(
    //'This test has not been implemented yet.'
    //);
    $result = $this->object->getInactiveCheckListInArray(1);

    $this->assertCount(1, $result);
  }

  public function testHasCriteria()
  {
    // Remove the following lines when you implement this test.
    //$this->markTestIncomplete(
    //  'This test has not been implemented yet.'
    //);
    $result = $this->object->hasCriteria();
    
    $this->assertTrue($result);
  }

  public function testGetAllCriteriasByCheckListId()
  {
     //Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );

  }

  
}
