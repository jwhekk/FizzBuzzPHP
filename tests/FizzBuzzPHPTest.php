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
  public function testFizzBuzzerGivesBuzzWith5orMultiple5NotMultiple3() {
    $fizzbuzz = new FizzBuzzPHP();
    $this->assertEquals("Buzz", $fizzbuzz->fizzbuzzer(5));
    $this->assertEquals("Buzz", $fizzbuzz->fizzbuzzer(10));
    $this->assertEquals("Buzz", $fizzbuzz->fizzbuzzer(550));
    $this->assertNotEquals("Buzz", $fizzbuzz->fizzbuzzer(45));
  }
  public function testFizzBuzzerGivesFizzBuzzWith15orMultipleOf15() {
    $fizzbuzz = new FizzBuzzPHP();
    $this->assertEquals("FizzBuzz", $fizzbuzz->fizzbuzzer(15));
    $this->assertEquals("FizzBuzz", $fizzbuzz->fizzbuzzer(45));
    $this->assertEquals("FizzBuzz", $fizzbuzz->fizzbuzzer(915));
    $this->assertNotEquals("FizzBuzz", $fizzbuzz->fizzbuzzer(8));
  }
  public function testFizzBuzzerGivesNumberWithNonMultiple3or5() {
    $fizzbuzz = new FizzBuzzPHP();
    $this->assertEquals(4, $fizzbuzz->fizzbuzzer(4));
    $this->assertEquals(98, $fizzbuzz->fizzbuzzer(98));
    $this->assertEquals(299, $fizzbuzz->fizzbuzzer(299));
    $this->assertNotEquals(3, $fizzbuzz->fizzbuzzer(3));
  }
  public function testFizzBuzzerGivesErrorWhenNotANumber() {
    $fizzbuzz = new FizzBuzzPHP();
    $this->assertEquals('Not a number!', $fizzbuzz->fizzbuzzer('a'));
  }
  public function testFizzBuzzListRangeGivesTheRightRange() {
    $fizzbuzz = new FizzBuzzPHP();
    // array declaratie zorgt voor geen uitvoer
    $array = array('FizzBuzz', 916, 917, 'Fizz', 919, 'Buzz',
                    'Fizz', 922, 923, 'Fizz', 'Buzz', 926, 'Fizz',
                    928, 929, 'FizzBuzz');
    $this->assertEquals($array, $fizzbuzz->fizzbuzzListRange(915,930));
  }
}