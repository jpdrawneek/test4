<?php

namespace Fitbug\Tests;

use Fitbug\TemperatureConvert as TemperatureConvert;

/**
 * Description of exampleTest
 *
 * @author jpd
 */
class exampleTest extends \PHPUnit_Framework_TestCase {
  
  /** @var fitbug/TemperatureConvert */
  protected $object;

  public function setup() {
    $this->object = new TemperatureConvert();
  }
  
  public function testTempIsTwo() {
    $result = $this->object->findNearestTemp(2);
    
    $this->assertEquals($result, 3);
  }
  
  public function testTempIsMinus15() {
    $result = $this->object->findNearestTemp(-15);
    $this->assertEquals($result, -20);
  }
  
  public function testTempIsSix() {
    $result = $this->object->findNearestTemp(6);
    $this->assertEquals($result, 7);
  }
  
  public function testTempIsMinux21() {
    $result = $this->object->findNearestTemp(-21);
    $this->assertEquals($result, -20);
  }
  
  public function testTempIs12() {
    $result = $this->object->findNearestTemp(12);
    $this->assertEquals($result, 11);
  }
  
}
