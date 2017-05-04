<?php

namespace pure\entity;

class FinanceiroContaProgramadaConta {
  private /* String */ $nome;
  private /* Double */ $valor;
  private /* DateTime */ $data;
  private /* Integer */ $financeiroContaProgramadaId;

  public function __construct($nome, $valor, $data, $financeiroContaProgramadaId) {
    $this->nome = $nome;
    $this->valor = $valor;
    $this->data = $data;
    $this->financeiroContaProgramadaId = $financeiroContaProgramadaId;
  }

  public function getNome() {
    return $this->nome;
  }
  public function getValor() {
    return $this->valor;
  }
  public function getData() {
    return $this->data;
  }
  public function getFinanceiroContaProgramadaId() {
    return $this->financeiroContaProgramadaId;
  }
}
