<?php

namespace pure\entity;

class Fornecedor2 {
  private $razaoSocial;
  private $nomeFantasia;

  public function __construct($razaoSocial, $nomeFantasia) {
    $this->razaoSocial = $razaoSocial;
    $this->nomeFantasia = $nomeFantasia;
  }

  public function getRazaoSocial() { return $this->razaoSocial; }
  public function getNomeFantasia() { return $this->nomeFantasia; }

  public function toArray() {
    return [ "razaoSocial" => $this->razaoSocial, "nomeFantasia" => $this->nomeFantasia ];
  }

  public static function fromRow($row) {
    return new Fornecedor2($row['fldRazaoSocial'], $row['fldNomeFantasia']);
  }
}
