<?php
namespace pure\ponto;

class Interval {
  private $begin;
  private $end;

  public function __construct($begin, $end) {
    $this->begin = $begin;
    $this->end = $end;
  }

  /** @returns int */
  public function total() {
    return $this->end - $this->begin;
  }

  public function getBegin() { return $this->begin; }
  public function getEnd() { return $this->end; }

  public function __toString() {
    return "inicio: " . $this->begin . ", fim: " . $this->end;
  }
}
