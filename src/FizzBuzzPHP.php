<?php

namespace jwhekk\FizzBuzzPHP;

class FizzBuzzPHP
{
  public function fizzbuzzer($number) {
    if (($number % 3 == 0) && !($number % 5 == 0)) {
      return "Fizz";
    }
  }
}