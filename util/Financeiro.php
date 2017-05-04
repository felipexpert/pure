<?php

namespace pure\util;

use \pure\entity\FinanceiroContaProgramada;
use \pure\entity\FinanceiroContaProgramadaConta;
use \pure\entity\FinanceiroContaProgramadaBaixa;
use \pure\Optional;
use \pure\Entity;
use \pure\FlArray;

class Financeiro {
  private function __construct() {}

  public static function /* [FinanceiroContaProgramadaConta] */ getContasProgramadasSemBaixa($eContaProgramada, $de, $ate, $todasBaixas) {
    $baixas = $todasBaixas->filter(function($b) use($eContaProgramada) { return $b->getFinanceiroContaProgramadaId() == $eContaProgramada->getKey(); });
    $contasSemBaixas;
    {
      $contas = [];
      { // contas dentro do intervalo START
        $ultimaData = $eContaProgramada->getValue()->getDataInicio();
        $optDataTermino = $eContaProgramada->getValue()->getDataTermino();
        $copyDate = function ($date) {
          $nd = new \DateTime();
          $nd->setTimestamp($date->getTimestamp());
          return $nd;
        };
        while((!$optDataTermino->isPresent() || $ultimaData <= $optDataTermino->get()) && $ultimaData <= $ate) {
          if($ultimaData >= $de)
            $contas[] = new FinanceiroContaProgramadaConta($eContaProgramada->getValue()->getNome(), $eContaProgramada->getValue()->getValor(), $ultimaData, $eContaProgramada->getKey());
          $ultimaData = $copyDate($ultimaData);
          $ultimaData->modify('+' . $eContaProgramada->getValue()->getIntervaloFrequencia() . ' ' . $eContaProgramada->getValue()->getIntervaloTipo());
        }
      } // contas dentro do intervalo END
      { // tirar as que ja tem baixas START
        $hasBaixa = function($data) use($baixas) {
          return $baixas->find(function($baixa) use($data) { return $data->format('Y-m-d') == $baixa->getData()->format('Y-m-d'); })->isPresent();
        };
        $contasSemBaixas = (new FlArray($contas))->filter(function($c) use($hasBaixa, $baixas) {
          return !$hasBaixa($c->getData());
        })->getArray();
      } // tirar as que ja tem baixas END
    }
    return $contasSemBaixas;
  }
}
