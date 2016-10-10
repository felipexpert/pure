<?php

namespace pure\entity;

class OrdemDeProducao {

  private $transportador;

  public function __construct($transportador) {
    $this->transportador = $transportador;
  }

  public function getTransportador() {
    return $this->transportador;
  }

}
