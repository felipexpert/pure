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
         , 'loader/Transportador'
         , 'ponto/Day'
         , 'ponto/Interval'
         , 'ponto/Util'
         , 'util/Financeiro'
         , 'ViewHelper' ];

forEach($files as $file)
  require_once __DIR__ . '/' . $file . '.php';
