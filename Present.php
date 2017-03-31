<?php

namespace pure;

class Present extends Optional {

  private $reference;

  protected function __construct($reference) {
    $this->reference = $reference;
  }

  public function isPresent() {
    return true;
  }

  public function get() {
    return $this->reference;
  }

  public function equals($object) {
    if($object instanceof Present) return $this->reference === $object->get();
    return false;
  }

  public function bind($f) {
    return $this->isPresent()
      ? $f($this->get())
      : Optional::absent();
  }

  public function __toString() {
    return 'Present{reference=' . $this->reference . '}';
  }

}
