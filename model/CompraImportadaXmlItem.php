<?php

namespace pure\model;

class CompraImportadaXmlItem {
  private $codigo;
  private $nome;
  private $qtd;

  public function __construct($codigo, $nome, $qtd) {
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->qtd = $qtd;
  }

  public function getCodigo() { return $this->codigo; }
  public function getNome() { return $this->nome; }
  public function getQtd() { return $this->qtd; }
}
