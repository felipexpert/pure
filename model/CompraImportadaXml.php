<?php

namespace pure\model;

class CompraImportadaXml {
  private $fornCnpj;
  private $fornNomeFantasia;
  private $fornRazaoSocial;
  private $itemList;

  public function __construct($fornCnpj, $fornNomeFantasia, $fornRazaoSocial, $itemList) {
    $this->fornCnpj = $fornCnpj;
    $this->fornNomeFantasia = $fornNomeFantasia;
    $this->fornRazaoSocial = $fornRazaoSocial;
    $this->itemList = $itemList;
  }

  public function getFornCnpj() { return $this->fornCnpj; }
  public function getFornNomeFantasia() { return $this->fornNomeFantasia; }
  public function getFornRazaoSocial() { return $this->fornRazaoSocial; }
  public function getItemList() { return $this->itemList; }
}
