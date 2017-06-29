<?php

namespace pure\model;

class CompraImportadaXml {
  private $fornCnpj;
  private $fornIE;
  private $fornNomeFantasia;
  private $fornRazaoSocial;
  private $fornEndereco;
  private $fornNro;
  private $fornComplemento;
  private $fornBairro;
  private $fornMunicipioCodigo;
  private $fornCep;
  private $notaNumero;
  private $notaChave;
  private $itemList;

  /**
   * CompraImportadaXml constructor.
   * @param $fornCnpj
   * @param $fornIE
   * @param $fornNomeFantasia
   * @param $fornRazaoSocial
   * @param $fornEndereco
   * @param $fornNro
   * @param $fornComplemento
   * @param $fornBairro
   * @param $fornMunicipioCodigo
   * @param $fornCep
   * @param $notaNumero
   * @param $notaChave
   * @param $itemList
   */
  public function __construct($fornCnpj, $fornIE, $fornNomeFantasia, $fornRazaoSocial, $fornEndereco, $fornNro, $fornComplemento, $fornBairro, $fornMunicipioCodigo, $fornCep, $notaNumero, $notaChave, $itemList) {
    $this->fornCnpj = $fornCnpj;
    $this->fornIE = $fornIE;
    $this->fornNomeFantasia = $fornNomeFantasia;
    $this->fornRazaoSocial = $fornRazaoSocial;
    $this->fornEndereco = $fornEndereco;
    $this->fornNro = $fornNro;
    $this->fornComplemento = $fornComplemento;
    $this->fornBairro = $fornBairro;
    $this->fornMunicipioCodigo = $fornMunicipioCodigo;
    $this->fornCep = $fornCep;
    $this->notaNumero = $notaNumero;
    $this->notaChave = $notaChave;
    $this->itemList = $itemList;
  }

  /**
   * @return mixed
   */
  public function getFornCnpj() {
    return $this->fornCnpj;
  }

  /**
   * @return mixed
   */
  public function getFornIE() {
    return $this->fornIE;
  }

  /**
   * @return mixed
   */
  public function getFornNomeFantasia() {
    return $this->fornNomeFantasia;
  }

  /**
   * @return mixed
   */
  public function getFornRazaoSocial() {
    return $this->fornRazaoSocial;
  }

  /**
   * @return mixed
   */
  public function getFornEndereco() {
    return $this->fornEndereco;
  }

  /**
   * @return mixed
   */
  public function getFornNro() {
    return $this->fornNro;
  }

  /**
   * @return mixed
   */
  public function getFornComplemento() {
    return $this->fornComplemento;
  }

  /**
   * @return mixed
   */
  public function getFornBairro() {
    return $this->fornBairro;
  }

  /**
   * @return mixed
   */
  public function getFornMunicipioCodigo() {
    return $this->fornMunicipioCodigo;
  }

  /**
   * @return mixed
   */
  public function getFornCep() {
    return $this->fornCep;
  }

  /**
   * @return mixed
   */
  public function getNotaNumero() {
    return $this->notaNumero;
  }

  /**
   * @return mixed
   */
  public function getNotaChave() {
    return $this->notaChave;
  }

  /**
   * @return mixed
   */
  public function getItemList() {
    return $this->itemList;
  }

}
