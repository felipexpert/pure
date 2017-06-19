<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 16/06/17
 * Time: 11:09
 */

namespace pure\model;


class CompraItemNovo {
  private $produtoId;
  private $valor;
  private $desconto;
  private $quantidade;
  private $referencia;
  private $descricao;
  private $estoqueId;
  private $validadeData;

  /**
   * @return mixed
   */
  public function getProdutoId() {
    return $this->produtoId;
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
  public function getQuantidade() {
    return $this->quantidade;
  }

  /**
   * @return mixed
   */
  public function getReferencia() {
    return $this->referencia;
  }

  /**
   * @return mixed
   */
  public function getDescricao() {
    return $this->descricao;
  }

  /**
   * @return mixed
   */
  public function getEstoqueId() {
    return $this->estoqueId;
  }

  /**
   * @return mixed
   */
  public function getValidadeData() {
    return $this->validadeData;
  }

  public function fromArray($data) {
    foreach ($data as $key => $value) $this->{$key} = $value;
  }
}