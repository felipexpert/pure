<?php

namespace pure\model;

class CompraImportadaXmlItem {
  private $codigo;
  private $nome;
  private $qtd;
  private $valor;

  public function __construct($codigo, $nome, $qtd, $valor) {
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->qtd = $qtd;
    $this->valor = $valor;
  }

  public function getCodigo() { return $this->codigo; }
  public function getNome() { return $this->nome; }
  public function getQtd() { return $this->qtd; }
  public function getValor() { return $this->valor; }

  function __toString() {
    return '{' . $this->codigo . ',' . $this->nome . ',' . $this->qtd . ',' . $this->valor . '}';
  }

}
