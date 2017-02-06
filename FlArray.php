<?php
namespace pure;

class FlArray {
  private $array;

  public function __construct($array) {
    $this->array = $array;
  }

  public function map($function) {
    return new FlArray(Collection::map($this->array, $function));
  }

  function getArray() {
    return $this->array;
  }
}
