<?php 

use PHPUnit\Framework\TestCase;

class TestunitTest extends TestCase
{
  public function test_call_method_test()
  {
    $this->assertEquals('bar', (new \Core\Test())->foo());
  }
}