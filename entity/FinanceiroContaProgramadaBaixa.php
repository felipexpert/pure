<?php

namespace pure\entity;

class FinanceiroContaProgramadaBaixa {
  private /* Integer */ $financeiroContaProgramadaId;
  private /* DateTime */ $data;

  public function __construct($financeiroContaProgramadaId, $data) {
    $this->financeiroContaProgramadaId = $financeiroContaProgramadaId;
    $this->data = $data;
  }
  
  public function getFinanceiroContaProgramadaId() {
    return $this->financeiroContaProgramadaId;
  }
  public function getData() {
    return $this->data;
  }
}
