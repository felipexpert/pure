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
   private $controleEstoque;
   private $estoqueMinimo;
   private $tipo;
   private $unidade;
   private $cfop;
   private $cfopFora;
   private $unComercial;
   private $unTributavel;
   private $ICMSSitTributaria;
   private $origem;

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
  public function __construct($codigo = null, $fornecedorId = null, $nome = null, $descricao = null, $valorCompra = null, $valorVenda = null, $ncm = null, $controleEstoque = null, $estoqueMinimo = null, $tipo = null, $unidade = null, $cfop = null, $cfopFora = null, $unComercial = null, $unTributavel = null, $ICMSSitTributaria = null, $origem = null) {
    $this->codigo = $codigo;
    $this->fornecedorId = $fornecedorId;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->valorCompra = $valorCompra;
    $this->valorVenda = $valorVenda;
    $this->ncm = $ncm;
    $this->controleEstoque = $controleEstoque;
    $this->estoqueMinimo = $estoqueMinimo;
    $this->tipo = $tipo;
    $this->unidade = $unidade;
    $this->cfop = $cfop;
    $this->cfopFora = $cfopFora;
    $this->unComercial = $unComercial;
    $this->unTributavel = $unTributavel;
    $this->ICMSSitTributaria = $ICMSSitTributaria;
    $this->origem = $origem;
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
    /**
     * @return null
     */
  public function getControleEstoque(){
    return $this->controleEstoque;
  }

    /**
     * @return null
     */
    public function getEstoqueMinimo()
    {
        return $this->estoqueMinimo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getUnidade(){
        return $this->unidade;
    }

    public function getCFOP(){
        return $this->cfop;
    }

    public function getCFOPFora(){
        return $this->cfopFora;
    }

    public function getUnComercial(){
        return $this->unComercial;
    }

    public function getUnTributavel(){
        return $this->unTributavel;
    }

    public function getICMSSitTributaria(){
        return $this->ICMSSitTributaria;
    }

    public function getOrigem(){
        return $this->origem;
    }

  public function fromArray($data) {
    foreach($data as $key => $value) $this->{$key} = $value;
  }

  public function toArray() {
    return Util::simpleObjToArray($this);
  }
}