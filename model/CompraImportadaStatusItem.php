<?php

namespace pure\model;

class CompraImportadaStatusItem {
  private $xmlCodigo;
  private $xmlNome;
  private $xmlQtd;
  private $xmlValor;
  private $optEntityProduto;

  public function __construct($xmlCodigo, $xmlNome, $xmlQtd, $xmlValor, $optEntityProduto) {
    $this->xmlCodigo = $xmlCodigo;
    $this->xmlNome = $xmlNome;
    $this->xmlQtd = $xmlQtd;
    $this->xmlValor = $xmlValor;
    $this->optEntityProduto = $optEntityProduto;
  }

  public function getXmlCodigo() { return $this->xmlCodigo; }
  public function getXmlNome() { return $this->xmlNome; }
  public function getXmlQtd() { return $this->xmlQtd; }
  public function getXmlValor() { return $this->xmlValor; }
  public function getOptProduto() { return $this->optProduto; }

  public function toArray() {
    return [ 'xmlCodigo' => $this->xmlCodigo
           , 'xmlNome' => $this->xmlNome
           , 'xmlQtd' => $this->xmlQtd
           , 'xmlValor' => $this->xmlValor
           , 'optProduto' => $this->optEntityProduto->map(function($p) { return $p->toArray(); })->getOrNull() ];
  }
}
