<?php

namespace pure\entity;

class Fornecedor {
  private $razaoSocial;
  private $nomeFantasia;

  public function __construct($razaoSocial, $nomeFantasia) {
    $this->razaoSocial = $razaoSocial;
    $this->nomeFantasia = $nomeFantasia;
  }

  public function getRazaoSocial() { return $this->razaoSocial; }
  public function getNomeFantasia() { return $this->nomeFantasia; }

  public static function fromRow($row) {
    return new Fornecedor($row['fldRazaoSocial'], $row['fldNomeFantasia']);
  }
}
