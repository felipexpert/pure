<?php
namespace pure;

class Collection {
 
  public static function map($array, $function) {
    $array2 = [];
    forEach($array as $k => $v) $array2[$k] = $function($v, $k);
    return $array2;
  }

  public static function filter($array, $function) {
    $array2 = [];
    forEach($array as $k => $v)
      if($function($v, $k))
        $array2[] = $v;
    return $array2;
  }

  public static function some($array, $predicate) {
    forEach($array as $k => $v)
      if($predicate($v, $k)) return true;
    return false;
  }

  public static function find($array, $predicate) {
    forEach($array as $k => $v)
      if($predicate($v, $k)) return Optional::of($v);
    return Optional::absent();
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

  public static function mergeByKey($arrayA, $arrayB, $sameConverter) {
    $result = [];
    forEach($arrayA as $k => $v)
      $result[$k] = array_key_exists($k, $arrayB) ? $sameConverter($v, $arrayB[$k], $k) : $v;
    forEach($arrayB as $k => $v)
      if(!array_key_exists($k, $result)) 
        $result[$k] = $v;
  }

  public static function matchUnify($array, $matchFunction, $converter) {
    $result = [];

    $arrayToProcess = []; 
    // create an array with sequencial order
    forEach($array as $v) $arrayToProcess[] = ['element' => $v, 'processed' => false];
    $length = count($arrayToProcess);
    for($i = 0; $i < $length; $i++) {
      if(!$arrayToProcess[$i]['processed']) {
        $matches = [ $arrayToProcess[$i]['element'] ];
        for($j = $i + 1; $j < $length; $j++) {
          if( !$arrayToProcess[$j]['processed'] && $matchFunction($arrayToProcess[$i]['element'], $arrayToProcess[$j]['element']) ) {
            $matches[] = $arrayToProcess[$j]['element'];
            $arrayToProcess[$j]['processed'] = true;
          }
        }
        $arrayToProcess[$i]['processed'] = true;
        $matchesResult = $matches[0];
        $matchesLength = count($matches);
        for($k = 1; $k < $matchesLength; $k++) {
          $matchesResult = $converter($matchesResult, $matches[$k]);
        }
        $result[] = $matchesResult;
      }
    }

    return $result;
  }

}
