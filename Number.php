<?php

namespace pure;

final class Number {
  private function __construct() {}
  public static function eq($a, $b) {
    // 1/128 -> EPSILON
    return abs($a - $b) < 0.0078125; 
  }
  public static function le($a, $b) { return N::eq($a, $b) || $a < $b; }
  public static function ge($a, $b) { return N::eq($a, $b) || $a > $b; }
  public static function lt($a, $b) { return !N::eq($a, $b) && $a < $b; }
  public static function gt($a, $b) { return !N::eq($a, $b) && $a > $b; }
  public static function floorDecimals($n, $decimals = 2) { 
    $d = pow(10, $decimals);
    return floor($n * $d) / $d; 
  }
  public static function ceilDecimals($n, $decimals = 2) {
    $d = pow(10, $decimals);
    return ceil($n * $d) / $d; 
  }
  public static function strToNum($text) {
    return is_numeric($text)
      ? Optional::of((float) $text)
      : Optional::absent();
  }
}
