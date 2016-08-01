<?php

namespace jwhekk\FizzBuzzPHP;

class FizzBuzzPHP
{
  public function fizzbuzzer($number) {
    if (!is_int($number)) {
      return 'Not a number!';
    }elseif (($number % 3 == 0) && !($number % 5 == 0)) {
      return "Fizz";
    }elseif (($number % 5 == 0) && !($number % 3 == 0)) {
      return "Buzz";
    }elseif ($number % 15 == 0) {
      return "FizzBuzz";
    }else {
      return $number;
    }  
  }
}