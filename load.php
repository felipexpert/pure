<?php

$files = [ 'Optional'
         , 'Absent'
         , 'Present'
         , 'Collection'
         , 'FlArray'
         , 'Text'
         , 'Number'
         , 'SQLException'
         , 'Entity'
         , 'entity/Transportador'
         , 'entity/OrdemDeProducao'
         , 'entity/brindart/OrdemDeProducao'
         , 'entity/ClienteCreditoInfo'
         , 'entity/Destinatario'
         , 'entity/FinanceiroContaProgramada'
         , 'entity/FinanceiroContaProgramadaConta'
         , 'entity/FinanceiroContaProgramadaBaixa'
         , 'entity/Fornecedor'
         , 'entity/Fornecedor2'
         , 'entity/Produto'
         , 'model/CompraImportadaXml'
         , 'model/CompraImportadaXmlItem'
         , 'model/CompraImportadaStatus'
         , 'model/CompraImportadaStatusItem'
         , 'model/CompraNovo'
         , 'model/CompraItemNovo'
         , 'loader/Transportador'
         , 'ponto/Day'
         , 'ponto/Interval'
         , 'ponto/Util'
         , 'util/Financeiro'
         , 'dateTime/DateTimeUtil'
         , 'ViewHelper' ];

forEach($files as $file)
  require_once __DIR__ . '/' . $file . '.php';
