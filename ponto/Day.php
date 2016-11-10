<?php
namespace pure\ponto;

class Day {
  /* Optional<Interval> */
  private $i1;
  private $i2;
  private $i3;

  public function __construct($i1, $i2, $i3) {
    $this->i1 = $i1;
    $this->i2 = $i2;
    $this->i3 = $i3;
  }

  public function total() {
    $t = 0;
    if($this->i1->isPresent()) $t += $this->i1->get()->total();
    if($this->i2->isPresent()) $t += $this->i2->get()->total();
    if($this->i3->isPresent()) $t += $this->i3->get()->total();
    return $t;
  }

  public function __toString() {
    return "Intervalo 1 : " . $this->i1
        . ", Intervalo 2 : " . $this->i2
       . ", Intervalo 3 : " . $this->i3;
  }

}
