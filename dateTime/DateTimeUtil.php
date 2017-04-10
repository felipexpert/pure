<?php

namespace pure\dateTime;

use \pure\Collection;

class DateTimeUtil {
  private function __construct() {}

  public static function copy($dt) {
    $nd = new \DateTime();
    $nd->setTimestamp($dt->getTimestamp());
    return $nd;
  }

  public static function copyModify($dt, $string) {
    $nd = static::copy($dt);
    return $nd->modify($string);
  }
}
