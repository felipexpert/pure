<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 15/09/17
 * Time: 15:50
 */

namespace pure\entity;


use pure\Util;

class CompraImportadaProdutoNovo {
   private $codigo;
   private $fornecedorId;
   private $nome;
   private $descricao;
   private $valorCompra;
   private $valorVenda;
   private $ncm;

  /**
   * CompraImportadaProdutoNovo constructor.
   * @param $codigo
   * @param $fornecedorId
   * @param $nome
   * @param $descricao
   * @param $valorCompra
   * @param $valorVenda
   * @param $ncm
   */
  public function __construct($codigo = null, $fornecedorId = null, $nome = null, $descricao = null, $valorCompra = null, $valorVenda = null, $ncm = null) {
    $this->codigo = $codigo;
    $this->fornecedorId = $fornecedorId;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->valorCompra = $valorCompra;
    $this->valorVenda = $valorVenda;
    $this->ncm = $ncm;
  }

  /**
   * @return mixed
   */
  public function getCodigo()
  {
    return $this->codigo;
  }

  /**
   * @return mixed
   */
  public function getFornecedorId()
  {
    return $this->fornecedorId;
  }

  /**
   * @return mixed
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * @return mixed
   */
  public function getDescricao()
  {
    return $this->descricao;
  }

  /**
   * @return mixed
   */
  public function getValorCompra()
  {
    return $this->valorCompra;
  }

  /**
   * @return mixed
   */
  public function getValorVenda()
  {
    return $this->valorVenda;
  }

  /**
   * @return mixed
   */
  public function getNcm() {
    return $this->ncm;
  }

  public function fromArray($data) {
    foreach($data as $key => $value) $this->{$key} = $value;
  }

  public function toArray() {
    return Util::simpleObjToArray($this);
  }
}