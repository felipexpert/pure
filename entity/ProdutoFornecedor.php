<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 10/07/17
 * Time: 16:27
 */

namespace pure\entity;

use pure\Util;


class ProdutoFornecedor {
  private $produtoId;
  private $fornecedorId;
  private $codigo;
  private $observacao;

  /**
   * ProdutoFornecedor constructor.
   * @param $produtoId
   * @param $fornecedorId
   * @param $codigo
   * @param $observacao
   */
  public function __construct($produtoId, $fornecedorId, $codigo, $observacao) {
    $this->produtoId = $produtoId;
    $this->fornecedorId = $fornecedorId;
    $this->codigo = $codigo;
    $this->observacao = $observacao;
  }

  /**
   * @return mixed
   */
  public function getProdutoId() {
    return $this->produtoId;
  }

  /**
   * @return mixed
   */
  public function getFornecedorId() {
    return $this->fornecedorId;
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
  public function getObservacao() {
    return $this->observacao;
  }

  public function fromArray($data) {
    foreach($data as $key => $value) $this->{$key} = $value;
  }

  public function toArray() {
    return Util::simpleObjToArray($this);
  }
}