<?php

namespace pure\loader;

use \pure\entity\Transportador as Transp;
use \pure\Entity as Entity;

class Transportador {
  private function __construct() {}

  public static function loadAllTest() {
    $array = [ new Entity(1, new Transp('Felipe', false))
             , new Entity(2, new Transp('Brenda', false))
             , new Entity(3, new Transp('Juliana', false)) ];
    return $array;
  }
}
