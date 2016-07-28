<?php

namespace jwhekk\FizzBuzzPHP;

class FizzBuzzPHPTest extends \PHPUnit_Framework_TestCase
{
  public function testFizzBuzzerGivesFizzWith3orMultiple3NotMultiple5() {
    $fizzbuzz = new FizzBuzzPHP();
    $this->assertEquals("Fizz", $fizzbuzz->fizzbuzzer(3));
    $this->assertEquals("Fizz", $fizzbuzz->fizzbuzzer(6));
    $this->assertEquals("Fizz", $fizzbuzz->fizzbuzzer(333));
    $this->assertNotEquals("Fizz", $fizzbuzz->fizzbuzzer(15));
  }
}