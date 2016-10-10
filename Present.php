<?php

namespace pure;

class Present extends Optional {

  private $reference;

  protected function __construct($reference) {
    $this->reference = $reference;
  }

  function isPresent() {
    return true;
  }

  function get() {
    return $this->reference;
  }

  function equals($object) {
    if($object instanceof Present) return $this->reference === $object->get();
    return false;
  }

  function __toString() {
    return 'Present{reference=' . $this->reference . '}';
  }
}
