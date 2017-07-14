<?php

namespace pure;

require_once 'load.php';

use \pure\model\CompraImportadaStatus;
use \pure\model\CompraImportadaStatusItem;
use \pure\model\CompraImportadaXml;
use \pure\model\CompraImportadaXmlItem;
use \pure\entity\Fornecedor2;
use \pure\entity\Produto2;

class TestCompraImportada {
  public static function main() {
    $f = new Fornecedor2('Felipe', 'Miquilini');
    $ef = new Entity(1, $f);
    $p = new Produto2('a', 'produto-nome', 10, 15);
    $ep = new Entity(1, $p);
    $items = [
      new CompraImportadaStatusItem('xml-codigo', 'xml-nome', 2, Optional::of($ep))
    , new CompraImportadaStatusItem('xml-codigo-2', 'xml-nome-2', 2, Optional::absent())
    ];
    
    $cis = new CompraImportadaStatus(Optional::of($ef), 'cnpj-test', 'nome-fantasia', 'razao-social', $items);
    static::printLn('Status');
    var_dump($cis);

    $xmlItems = [
      new CompraImportadaXmlItem('xmlItemCod1', 'xmlItemNome1', 3)
    , new CompraImportadaXmlItem('xmlItemCod2', 'xmlItemNome2', 5)
    , new CompraImportadaXmlItem('xmlItemCod3', 'xmlItemNome3', 7)
    ];
    $cixml = new CompraImportadaXml('fornCNPJ', 'fornNomeFantasia', 'fornRazaoSocial', 29, $xmlItems); 
    static::printLn('XMLStatus');
    var_dump($cixml);
  }

  public static function printLn($text) {
    echo $text . "\n";
  }
}

TestCompraImportada::main();
