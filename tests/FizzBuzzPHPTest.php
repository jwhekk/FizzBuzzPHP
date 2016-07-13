<?php

namespace jwhekk\FizzBuzzPHP;

class FizzBuzzPHPTest extends \PHPUnit_Framework_TestCase
{
  public function testFizzBuzzerGivesFizzwith3() {
    $fizzbuzz = new FizzBuzzPHP();
    $result = $fizzbuzz->fizzbuzzer(3);
    $this->assertEquals("Fizz", $result);
  }
}