<?php

namespace pure;

class Entity {

  private $key;
  private $value;

  public function __construct($key, $value) {
    $this->key = $key;
    $this->value = $value;
  }

  public function getKey() {
    return $this->key;
  }

  public function getValue() {
    return $this->value;
  }

  public function __toString() {
    return 'Entity {key=' . $this->key . ',value=' . $this->value . '}'; 
  }

  public function toArray() {
    return [ 'key' => $this->key
           , 'value' => $this->value->toArray() ];
  }

  public function toJSON() {
    return json_encode($this->toArray());
  }

}
