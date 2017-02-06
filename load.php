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
         , 'loader/Transportador'
         , 'ponto/Day'
         , 'ponto/Interval'
         , 'ponto/Util'
         , 'ViewHelper' ];

forEach($files as $file)
  require_once __DIR__ . '/' . $file . '.php';
