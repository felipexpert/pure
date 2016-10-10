<?php

namespace pure\entity;

class Transportador {

  private $nome;
  private $disabled;

  public function __construct($nome = null, $disabled = null) {
    $this->nome = $nome;
    $this->disabled = $disabled;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getDisabled() {
    return $this->disabled;
  }

  public function __toString() {
    $disabled = $this->disabled ? "TRUE" : "FALSE";
    return "Transportador {nome=$this->nome, disable= $disabled}";
  }

}
