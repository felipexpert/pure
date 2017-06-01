<?php

namespace pure\module;

class CompraImportadaStatusItem {
  private $xmlCodigo;
  private $xmlNome;
  private $xmlQtd;
  private $optEntityProduto;

  public function __construct($xmlCodigo, $xmlNome, $xmlQtd, $optEntityProduto) {
    $this->xmlCodigo = $xmlCodigo;
    $this->xmlNome = $xmlNome;
    $this->xmlQtd = $xmlQtd;
    $this->optEntityProduto = $optEntityProduto;
  }

  public function getXmlCodigo() { return $this->xmlCodigo; }
  public function getXmlNome() { return $this->xmlNome; }
  public function getXmlQtd() { return $this->xmlQtd; }
  public function getOptProduto() { return $this->optProduto; }
}
