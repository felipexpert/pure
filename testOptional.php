<?php

namespace pure;

require_once 'load.php';

use \pure\Entity as Entity;
use \pure\entity\Transportador as Transportador;
use \pure\loader\Transportador as TransportadorLoader;

class TestOptional {
  public static function main() {
    $opt = Optional::of(1);
    static::printLn($opt);
    $opt2 = Optional::absent();
    static::printLn($opt2);
    $transportador = new Entity(1, new Transportador('test', false));
    $opt3 = Optional::of($transportador);
    static::printLn($opt3);
    $transportadores = TransportadorLoader::loadAllTest();
    static::printLn(print_r($transportadores, true));

    $xs = [1,2,3,4,5];
    $ys = Collection::map($xs, function($x) { return $x * 2; });
    static::printLn(print_r($ys, true));

    $opts = Collection::map($transportadores, function($t) { return ViewHelper::selectOpt($t->getKey(), $t->getValue()->getNome(), true); }); 
    $opts2 = Collection::prepend(ViewHelper::selectOpt('', 'SELECIONAR'), $opts);

    static::printLn(print_r($opts2, true));

    $joinedOpts = Text::join($opts2); 
    static::printLn($joinedOpts);
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestOptional::main();
