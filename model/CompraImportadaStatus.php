<?php

namespace pure\model;

use pure\Collection;

class CompraImportadaStatus {
  private $optEntityForn;
  private $fornCnpj;
  private $fornNomeFantasia;
  private $fornRazaoSocial;
  private $itemList;

  public function __construct($optEntityForn, $fornCnpj, $fornNomeFantasia, $fornRazaoSocial, $itemList) {
    $this->optEntityForn = $optEntityForn;
    $this->fornCnpj = $fornCnpj;
    $this->fornNomeFantasia = $fornNomeFantasia;
    $this->fornRazaoSocial = $fornRazaoSocial;
    $this->itemList = $itemList;
  }

  public function getEntityForn() { return $this->entityForn; }
  public function getFornCnpj() { return $this->fornCnpj; }
  public function getFornNomeFantasia() { return $this->fornNomeFantasia; }
  public function getFornRazaoSocial() { return $this->fornRazaoSocial; }
  public function getItemList() { return $this->itemList; }

  public function toArray() {
    return [ "fornCnpj" => $this->fornCnpj
           , "fornNomeFantasia" => $this->fornNomeFantasia
           , "fornRazaoSocial" => $this->fornRazaoSocial
           , "optFornecedor" => $this->optEntityForn->map(function($ef) { return $ef->toArray(); })->getOrNull()
           , "itemList" => Collection::map($this->itemList, function($i) { return $i->toArray(); }) ];
  }
}
