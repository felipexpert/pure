<?php
namespace pure;

abstract class Optional /*extends Monad*/ {

  private function __construct() {}

  /**
   * Returns an instance with no contained reference.
   */
  static function absent() {
    return Absent::instance();
  }

  /**
   * Returns an Optional instance containing the given non-null reference.
   */
  static function of($reference) {
    return new Present(static::checkNotNull($reference));
  }

  /**
   * If reference is non-null, returns an Optional instance containing
   * that reference; otherwise returns Absent.
   */
  static function fromNullable($reference) {
    return $reference === null ? static::absent() : new Present($reference);
  }

  function ifPresent($func) {
    if($this->isPresent()) $func($this->get());
  }
  function ifNotPresent($func) {
    if(!$this->isPresent()) $func();
  }
  function ifElse($funcP, $funcNP) {
    return $this->isPresent() ? $funcP($this->get()) : $funcNP();
  }
  function getOrElse($defaultValue) {
    return $this->isPresent() ? $this->get() : static::checkNotNull($defaultValue) ;
  }
  function getOrNull() {
    return $this->isPresent() ? $this->get() : null;
  }
  function map($func) {
    return $this->isPresent() ? static::of($func($this->get())) : $this;
  }
  abstract function isPresent();
  abstract function get();
  abstract function equals($object);

  // Monad implementation
  /*static function ret($x) {
    return Optional::of($x);
  } 
  function bind($f) {
    if($this->isPresent()) return $f($this->get());
    return $this;
  }*/
  /**
   * Make sure the passed reference is not null.
   */
  private static function checkNotNull($reference, $message = null) {
    if($message === null) $message = "Unallowed null in reference found.";
    if($reference === null) throw new \Exception($message);
    return $reference;
  }

  public static function bogusDate($date) {
    return $date == '0000-00-00' || $date == null
      ? Optional::absent()
      : Optional::of(new \DateTime($date));
  }
}
