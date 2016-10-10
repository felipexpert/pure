<?php

namespace pure;

class Absent extends Optional {

  private static $instance;

  private function __construct() {}

  function isPresent() {
    return false;
  }

  function get() {
    throw new Exception("Optional->get() cannot be called on an absent value");
  }

  function equals($object) {
    return $object === $this;
  }

  protected static function instance() {
    return static::$instance === null ? static::$instance = new Absent() : static::$instance;
  }

  function __toString() {
    return 'Absent';
  }
}
