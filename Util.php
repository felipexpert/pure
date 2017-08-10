<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 07/07/17
 * Time: 11:29
 */

namespace pure;


class Util {

  private function __construct() {
  }

  public static function simpleObjToArray($obj) {
    $result = [];
    $ref = new \ReflectionClass($obj);
    $methods = $ref->getMethods(\ReflectionMethod::IS_PUBLIC);
    forEach($methods as $m) {
      $methodName = $m->getName();
      if(Text::startsWith($methodName, "get")) {
        $propName = strtolower($methodName{3}) . Text::substring($methodName, 4);
        $result[$propName] = $obj->{$methodName}();
      }
    }

    return $result;
  }

}