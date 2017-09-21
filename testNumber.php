<?php

namespace pure;

require_once 'load.php';

class TestNumber {
  public static function main() {
    //static::printLn(Number::strToNum('hehe'));
    //static::printLn(Number::strToNum('345'));
    
    $soma = Collection::foldl([1,2,3,4,5,6,7], function($acc, $e) { return $acc + $e; }, 0);
    //static::printLn($soma);


    $items = [20, 10, 40, 10];
    $dist = Number::distribute($items, 50);

    static::printLn(Text::arrayToString($dist));

    $merged = Collection::zip($items, $dist);
    //var_dump($merged);

    $subtractArray = Collection::map($merged, function($tuple) { return $tuple[0] - $tuple[1]; });

      static::printLn(Text::arrayToString($subtractArray));

      $sum = Collection::foldl($subtractArray, function($acc, $i) { return $acc + $i; }, 0);

      //static::printLn($sum);
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestNumber::main();
