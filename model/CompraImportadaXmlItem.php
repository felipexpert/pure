<?php

namespace pure\model;

class CompraImportadaXmlItem {
  private $codigo;
  private $nome;
  private $qtd;
  private $valor;
  private $desconto;

  private $ncm;

  /**
   * CompraImportadaXmlItem constructor.
   * @param $codigo
   * @param $nome
   * @param $qtd
   * @param $valor
   * @param $desconto
   * @param $ncm
   */
  public function __construct($codigo, $nome, $qtd, $valor, $desconto, $ncm) {
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->qtd = $qtd;
    $this->valor = $valor;
    $this->desconto = $desconto;
    $this->ncm = $ncm;
  }

  /**
   * @return mixed
   */
  public function getCodigo() {
    return $this->codigo;
  }

  /**
   * @return mixed
   */
  public function getNome() {
    return $this->nome;
  }

  /**
   * @return mixed
   */
  public function getQtd() {
    return $this->qtd;
  }

  /**
   * @return mixed
   */
  public function getValor() {
    return $this->valor;
  }

  /**
   * @return mixed
   */
  public function getDesconto() {
    return $this->desconto;
  }

  /**
   * @return mixed
   */
  public function getNcm() {
    return $this->ncm;
  }

  function __toString() {
    return '{' . $this->codigo . ',' . $this->nome . ',' . $this->qtd . ',' . $this->valor . ',' . $this->desconto . ',' . $this->ncm . '}';
  }

}
