<?php

namespace pure;

require_once 'load.php';

class TestNumber {
  public static function main() {
    static::printLn(Number::strToNum('hehe'));
    static::printLn(Number::strToNum('345'));
    
    $soma = Collection::foldl([1,2,3,4,5,6,7], function($acc, $e) { return $acc + $e; }, 0);
    static::printLn($soma);
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestNumber::main();
