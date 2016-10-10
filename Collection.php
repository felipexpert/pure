<?php
namespace pure;

class Collection {
 
  public static function map($array, $function) {
    $array2 = [];
    forEach($array as $k => $v) $array2[$k] = $function($v, $k);
    return $array2;
  }

  public static function foldl($array, $function, $zero) {
    forEach($array as $k => $v) $zero = $function($zero, $v, $k);
    return $zero;
  }

  public static function prepend($e, $array) {
    $array2 = [$e];
    forEach($array as $v) $array2[] = $v;
    return $array2;
  }

  public static function arrayToOptional($array) {
    return count($array) > 0
      ? Optional::of(array_values($array)[0])
      : Optional::absent();
  }

}
