<?php

namespace pure\entity;

class FinanceiroContaProgramada {
  private /* String */ $nome;
  private /* Double */ $valor;
  private /* DateTime */ $dataInicio;
  private /* Optinal<DateTime> */ $dataTermino;
  private /* String */ $intervaloTipo;
  private /* Integer */ $intervaloFrequencia;
  private /* Boolean */ $excluido;

  public function __construct($nome, $valor, $dataInicio, $dataTermino, $intervaloTipo, $intervaloFrequencia, $excluido) {
    $this->nome = $nome;
    $this->valor = $valor;
    $this->dataInicio = $dataInicio;
    $this->dataTermino = $dataTermino;
    $this->intervaloTipo = $intervaloTipo;
    $this->intervaloFrequencia = $intervaloFrequencia;
    $this->excluido = $excluido;
  }

  public function getNome() {
    return $this->nome;
  }
  public function getValor() {
    return $this->valor;
  }
  public function getDataInicio() {
    return $this->dataInicio;
  }
  public function getDataTermino() {
    return $this->dataTermino;
  }
  public function getIntervaloTipo() {
    return $this->intervaloTipo;
  }
  public function getIntervaloFrequencia() {
    return $this->intervaloFrequencia;
  }
  public function isExcluido() {
    return $this->excluido;
  }
}
