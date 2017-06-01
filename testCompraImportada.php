<?php

namespace pure;

require_once 'load.php';

use \pure\module\CompraImportadaStatus;
use \pure\module\CompraImportadaStatusItem;
use \pure\entity\Fornecedor;
use \pure\entity\Produto;

class TestCompraImportada {
  public static function main() {
    $f = new Fornecedor('Felipe', 'Miquilini');
    $ef = new Entity(1, $f);
    $p = new Produto('a', 'produto-nome', 10, 15);
    $ep = new Entity(1, $p);
    $items = [
      new CompraImportadaStatusItem('xml-codigo', 'xml-nome', 2, Optional::of($ep))
    , new CompraImportadaStatusItem('xml-codigo-2', 'xml-nome-2', 2, Optional::absent())
    ];
    
    $cis = new CompraImportadaStatus(Optional::of($ef), 'cnpj-test', 'nome-fantasia', 'razao-social', $items);
    var_dump($cis);
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestCompraImportada::main();
