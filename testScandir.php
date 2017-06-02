<?php

namespace pure;

require_once 'load.php';


class TestScandir {
  public static function main() {
    $files = scandir(__DIR__);
    forEach($files as $f) static::printLn($f);
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestScandir::main();