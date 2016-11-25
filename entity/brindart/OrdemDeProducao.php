<?php

namespace pure\entity\brindart;

class OrdemDeProducao {

  private $lote;

  public function __construct($lote) {
    $this->lote = $lote;
  }

  public function getLote() {
    return $this->lote;
  }

}
