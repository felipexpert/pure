<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 07/07/17
 * Time: 13:58
 */

namespace pure\entity;

use pure\Util;

class Produto {
  private $codigo;
  private $refCodigo;
  private $categoriaId;
  private $subCategoriaId;
  private $marcaId;
  private $fornecedorId;
  private $nome;
  private $descricao;
  private $unMedidaId;
  private $valorCompra;
  private $lucroMargem;
  private $valorVenda;
  private $codigoBarras;
  private $cadastroData;
  private $observacao;
  private $disabled;
  private $excluido;
  private $estoqueMinimo;
  private $tabelaPreco;
  private $estoqueControle;
  private $ecfAliquotaId;
  private $tipoId;
  private $balanca;
  private $peso;

  /**
   * Produto constructor.
   * @param $codigo
   * @param $refCodigo
   * @param $categoriaId
   * @param $subCategoriaId
   * @param $marcaId
   * @param $fornecedorId
   * @param $nome
   * @param $descricao
   * @param $unMedidaId
   * @param $valorCompra
   * @param $lucroMargem
   * @param $valorVenda
   * @param $codigoBarras
   * @param $cadastroData
   * @param $observacao
   * @param $disabled
   * @param $excluido
   * @param $estoqueMinimo
   * @param $tabelaPreco
   * @param $estoqueControle
   * @param $ecfAliquotaId
   * @param $tipoId
   * @param $balanca
   * @param $peso
   */
  public function __construct($codigo, $refCodigo, $categoriaId, $subCategoriaId, $marcaId, $fornecedorId, $nome, $descricao, $unMedidaId, $valorCompra, $lucroMargem, $valorVenda, $codigoBarras, $cadastroData, $observacao, $disabled, $excluido, $estoqueMinimo, $tabelaPreco, $estoqueControle, $ecfAliquotaId, $tipoId, $balanca, $peso) {
    $this->codigo = $codigo;
    $this->refCodigo = $refCodigo;
    $this->categoriaId = $categoriaId;
    $this->subCategoriaId = $subCategoriaId;
    $this->marcaId = $marcaId;
    $this->fornecedorId = $fornecedorId;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->unMedidaId = $unMedidaId;
    $this->valorCompra = $valorCompra;
    $this->lucroMargem = $lucroMargem;
    $this->valorVenda = $valorVenda;
    $this->codigoBarras = $codigoBarras;
    $this->cadastroData = $cadastroData;
    $this->observacao = $observacao;
    $this->disabled = $disabled;
    $this->excluido = $excluido;
    $this->estoqueMinimo = $estoqueMinimo;
    $this->tabelaPreco = $tabelaPreco;
    $this->estoqueControle = $estoqueControle;
    $this->ecfAliquotaId = $ecfAliquotaId;
    $this->tipoId = $tipoId;
    $this->balanca = $balanca;
    $this->peso = $peso;
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
  public function getRefCodigo() {
    return $this->refCodigo;
  }

  /**
   * @return mixed
   */
  public function getCategoriaId() {
    return $this->categoriaId;
  }

  /**
   * @return mixed
   */
  public function getSubCategoriaId() {
    return $this->subCategoriaId;
  }

  /**
   * @return mixed
   */
  public function getMarcaId() {
    return $this->marcaId;
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
  public function getNome() {
    return $this->nome;
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
  public function getUnMedidaId() {
    return $this->unMedidaId;
  }

  /**
   * @return mixed
   */
  public function getValorCompra() {
    return $this->valorCompra;
  }

  /**
   * @return mixed
   */
  public function getLucroMargem() {
    return $this->lucroMargem;
  }

  /**
   * @return mixed
   */
  public function getValorVenda() {
    return $this->valorVenda;
  }

  /**
   * @return mixed
   */
  public function getCodigoBarras() {
    return $this->codigoBarras;
  }

  /**
   * @return mixed
   */
  public function getCadastroData() {
    return $this->cadastroData;
  }

  /**
   * @return mixed
   */
  public function getObservacao() {
    return $this->observacao;
  }

  /**
   * @return mixed
   */
  public function getDisabled() {
    return $this->disabled;
  }

  /**
   * @return mixed
   */
  public function getExcluido() {
    return $this->excluido;
  }

  /**
   * @return mixed
   */
  public function getEstoqueMinimo() {
    return $this->estoqueMinimo;
  }

  /**
   * @return mixed
   */
  public function getTabelaPreco() {
    return $this->tabelaPreco;
  }

  /**
   * @return mixed
   */
  public function getEstoqueControle() {
    return $this->estoqueControle;
  }

  /**
   * @return mixed
   */
  public function getEcfAliquotaId() {
    return $this->ecfAliquotaId;
  }

  /**
   * @return mixed
   */
  public function getTipoId() {
    return $this->tipoId;
  }

  /**
   * @return mixed
   */
  public function getBalanca() {
    return $this->balanca;
  }

  /**
   * @return mixed
   */
  public function getPeso() {
    return $this->peso;
  }

  public function fromArray($data) {
    foreach($data as $key => $value) $this->{$key} = $value;
  }

  public function toArray() {
    return Util::simpleObjToArray($this);
  }

  public static function fromRow($row) {
    return new Produto( $row['fldCodigo'], $row['fldRefCodigo'], $row['fldCategoria_Id'],
        $row['fldSubCategoria_Id'], $row['fldMarca_Id'], $row['fldFornecedor_Id'], $row['fldNome'],
        $row['fldDescricao'], $row['fldUN_Medida_Id'], $row['fldValorCompra'],
        $row['fldLucroMargem'], $row['fldValorVenda'], $row['fldCodigoBarras'],
        $row['fldCadastroData'], $row['fldObservacao'], $row['fldDisabled'],
        $row['fldExcluido'], $row['fldEstoque_Minimo'], $row['fldTabela_Preco'],
        $row['fldEstoque_Controle'], $row['fldEcf_Aliquota_Id'], $row['fldTipo_Id'],
        $row['fldBalanca'], $row['fldPeso'] );
  }
}
