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

  public function filter($function) {
    return new FlArray(Collection::filter($this->array, $function));
  }

  public function findIndex($function) {
    forEach($this->array as $key => $value) 
      if($function($value))
        return Optional::of($key);
    return Optional::absent();
  }

  public function find($function) {
    forEach($this->array as $key => $value) 
      if($function($value))
        return Optional::of($value);
    return Optional::absent();
  }

  public function foldl($function, $zero) {
    return Collection::foldl($this->array, $function, $zero);
  }

  function getArray() {
    return $this->array;
  }
}
