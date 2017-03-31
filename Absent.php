<?php

namespace pure;

class Absent extends Optional {

  private static $instance;

  private function __construct() {}

  public function isPresent() {
    return false;
  }

  public function get() {
    throw new Exception("Optional->get() cannot be called on an absent value");
  }

  public function equals($object) {
    return $object === $this;
  }

  protected static function instance() {
    return static::$instance === null ? static::$instance = new Absent() : static::$instance;
  }

  public function __toString() {
    return 'Absent';
  }

  public function bind() {
    return Optional::absent();
  }
}
