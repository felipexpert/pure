<?php

namespace pure\model;

class CompraImportadaXml {
  private $fornCnpj;
  private $fornIE;
  private $fornNomeFantasia;
  private $fornRazaoSocial;
  private $notaNumero;
  private $notaChave;
  private $itemList;

  public function __construct($fornCnpj, $fornIE, $fornNomeFantasia, $fornRazaoSocial, $numeroNota, $chaveNota, $itemList) {
    $this->fornCnpj = $fornCnpj;
    $this->fornIE = $fornIE;
    $this->fornNomeFantasia = $fornNomeFantasia;
    $this->fornRazaoSocial = $fornRazaoSocial;
    $this->notaNumero = $numeroNota;
    $this->notaChave = $chaveNota;
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
