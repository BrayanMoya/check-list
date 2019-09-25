<?php
include dirname(__FILE__) . '/../../bootstrap/doctrine.php';
/**
 * Created by PhpStorm.
 * User: Gaviria
 * Date: 11/09/2019
 * Time: 11:03 PM
 */

class CriteriaTest extends PHPUnit_Framework_TestCase
{
  private $object;

  protected function setUp()
  {
    $this->object = new Standard();
  }

  protected function tearDown()
  {
    $this->object = null;
  }

  public function testSumWeightByStandard()
  {
    // Remove the following lines when you implement this test.
    //$this->markTestIncomplete(
    //  'This test has not been implemented yet.'
    //);
    $result = $this->object->sumWeightByStandard(1);
    
    $this->assertLessThanOrEqual(10,$result);
  }

  
  public function testGetAllCriteriasByTemplateId()
  {
    // Remove the following lines when you implement this test.
    //$this->markTestIncomplete(
    //  'This test has not been implemented yet.'
    //);
      $result = $this->object->getAllCriteriasByTemplate(3);

    $this->assertContains('criterio 3', $result);

  }
}
