<?php

namespace pure;

require_once 'load.php';

use \pure\Optional as Optional;
use \pure\ponto\Interval as Interval;
use \pure\ponto\Day as Day;
use \pure\ponto\Util as Util;
use \pure\Collection as Collection;

class TestOptional {
  public static function main() {
    static::testInterval();
    static::testDay();

  }

  public static function hourToSec($hs) {
    return $hs * 60 * 60;
  }
  public static function secToHour($secs) {
    return $secs / (60 * 60);
  }

  public static function testDay() {
    $now = time();
    static::printLn($seconds);
    $i1 = Optional::of(new Interval($now, $now + static::hourToSec(3)));
    $i2 = Optional::of(new Interval($now + static::hourToSec(4.5), $now + static::hourToSec(9.5)));
    $i3 = Optional::absent();

    $month = [];

    for($i = 0; $i < 22; $i++) { 
      $d = new Day($i1, $i2, $i3);
      $month[$i] = $d;
    }

    static::printLn($d);

    $total = $d->total();
    static::printLn("O total eh: " . $total);
    static::printLn("Esta calculando o dia certo? " . (static::secToHour($total) == 8 ? "SIM" : "NAO") );

    $bonito = Util::secondsToText($total);

    static::printLn("Vamos ver o total " . $total . " bonito!: " .  $bonito);

    $arrayQueSeraTrabalhado = $month;
    $estrategiaDeReducao = function($acc, $day) { return $day->total() + $acc; };
    $valorInicial = 0;
    // $totalMonth = Collection::foldl($arrayQueSeraTrabalhado, $estrategiaDeReducao, $valorInicial);
    
    $totalMonth = 0;

    forEach($month as $day)
      $totalMonth += $day->total();
    

    static::printLn("O total mes eh: " . $totalMonth);
    static::printLn("Esta calculando o mes certo? " . (static::secToHour($totalMonth) == 8 * 22 ? "SIM" : "NAO") );

    $bonitoMonth = Util::secondsToText($totalMonth);
    static::printLn("Vamos ver o total mes " . $totalMonth . " bonito!: " .  $bonitoMonth);
  }

  public static function testInterval() {
    $i = new Interval(600, 3600);
    // ver se os valores estao entrando
    static::printLn($i);

    $total = $i->total();
    static::printLn("Esta calculando o intervalo certo? " . ($total == 3000 ? "SIM" : "NAO") );
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestOptional::main();
