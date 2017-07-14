<?php

namespace pure\model;

class CompraImportadaStatusItem {
  private $xmlCodigo;
  private $xmlNome;
  private $xmlQtd;
  private $xmlValor;
  private $xmlDesconto;
  private $xmlNcm;

  private $optEntityProduto;

  /**
   * CompraImportadaStatusItem constructor.
   * @param $xmlCodigo
   * @param $xmlNome
   * @param $xmlQtd
   * @param $xmlValor
   * @param $xmlDesconto
   * @param $xmlNcm
   * @param $optEntityProduto
   */
  public function __construct($xmlCodigo, $xmlNome, $xmlQtd, $xmlValor, $xmlDesconto, $xmlNcm, $optEntityProduto) {
    $this->xmlCodigo = $xmlCodigo;
    $this->xmlNome = $xmlNome;
    $this->xmlQtd = $xmlQtd;
    $this->xmlValor = $xmlValor;
    $this->xmlDesconto = $xmlDesconto;
    $this->xmlNcm = $xmlNcm;
    $this->optEntityProduto = $optEntityProduto;
  }

  /**
   * @return mixed
   */
  public function getXmlCodigo() {
    return $this->xmlCodigo;
  }

  /**
   * @return mixed
   */
  public function getXmlNome() {
    return $this->xmlNome;
  }

  /**
   * @return mixed
   */
  public function getXmlQtd() {
    return $this->xmlQtd;
  }

  /**
   * @return mixed
   */
  public function getXmlValor() {
    return $this->xmlValor;
  }

  /**
   * @return mixed
   */
  public function getXmlDesconto() {
    return $this->xmlDesconto;
  }

  /**
   * @return mixed
   */
  public function getXmlNcm() {
    return $this->xmlNcm;
  }

  /**
   * @return mixed
   */
  public function getOptEntityProduto() {
    return $this->optEntityProduto;
  }

  public function toArray() {
    return [ 'xmlCodigo' => $this->xmlCodigo
           , 'xmlNome' => $this->xmlNome
           , 'xmlQtd' => $this->xmlQtd
           , 'xmlValor' => $this->xmlValor
           , 'xmlDesconto' => $this->xmlDesconto
           , 'xmlNcm' => $this->xmlNcm
           , 'optProduto' => $this->optEntityProduto->map(function($p) { return $p->toArray(); })->getOrNull()
    ];
  }
}
