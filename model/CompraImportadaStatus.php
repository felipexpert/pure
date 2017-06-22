<?php

namespace pure\model;

use pure\Collection;

class CompraImportadaStatus {
  private $optEntityForn;
  private $fornCnpj;
  private $fornIE;
  private $fornNomeFantasia;
  private $fornRazaoSocial;
  private $notaNumero;
  private $notaChave;
  private $itemList;

  /**
   * CompraImportadaStatus constructor.
   * @param $optEntityForn
   * @param $fornCnpj
   * @param $fornNomeFantasia
   * @param $fornRazaoSocial
   * @param $notaNumero
   * @param $notaChave
   * @param $itemList
   */
  public function __construct($optEntityForn, $fornCnpj, $fornIE, $fornNomeFantasia, $fornRazaoSocial, $notaNumero, $notaChave, $itemList) {
    $this->optEntityForn = $optEntityForn;
    $this->fornCnpj = $fornCnpj;
    $this->fornIE = $fornIE;
    $this->fornNomeFantasia = $fornNomeFantasia;
    $this->fornRazaoSocial = $fornRazaoSocial;
    $this->notaNumero = $notaNumero;
    $this->notaChave = $notaChave;
    $this->itemList = $itemList;
  }

  /**
   * @return mixed
   */
  public function getOptEntityForn() {
    return $this->optEntityForn;
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

  public function toArray() {
    return [ "fornCnpj" => $this->fornCnpj
           , "fornIE" => $this->fornIE
           , "fornNomeFantasia" => $this->fornNomeFantasia
           , "fornRazaoSocial" => $this->fornRazaoSocial
           , "optFornecedor" => $this->optEntityForn->map(function($ef) { return $ef->toArray(); })->getOrNull()
           , "notaNumero" => $this->notaNumero
           , "notaChave" => $this->notaChave
           , "itemList" => Collection::map($this->itemList, function($i) { return $i->toArray(); }) ];
  }
}
