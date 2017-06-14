<?php

namespace pure\entity;

use \pure\Text;

class Produto {
  private $codigo;
  private $nome;
  private $valorCompra;
  private $valorVenda;

  public function __construct($codigo, $nome, $valorCompra, $valorVenda) {
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->valorCompra = $valorCompra;
    $this->valorVenda = $valorVenda;
  }

  public function getCodigo() { return $this->codigo; }
  public function getNome() { return $this->nome; }
  public function getValorCompra() { return $this->valorCompra; }
  public function getValorVenda() { return $this->valorVenda; }

  public function toArray() {
    return [ 'codigo' => $this->codigo, 'nome' => $this->nome, 'valorCompra' => $this->valorCompra, 'valorVenda' => $this->valorVenda ];
  }

  public static function fromRow($row) {
    return new Produto($row['fldCodigo'], $row['fldNome'], Text::forceNumber($row['fldValorCompra']), Text::forceNumber($row['fldValorVenda']));
  }
}
