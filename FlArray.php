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

  public function findIndex($function) {
    forEach($this->array as $key => $value) 
      if($function($value))
        return Optional::of($key);
    return Optional::absent();
  }

  function getArray() {
    return $this->array;
  }
}
