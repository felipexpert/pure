<?php

namespace pure;

require_once 'load.php';

class TestNumber {
  public static function main() {
    static::printLn(Number::strToNum('hehe'));
    static::printLn(Number::strToNum('345'));
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestNumber::main();
