<?php

$files = [ 'Optional'
         , 'Absent'
         , 'Present'
         , 'Collection'
         , 'Text'
         , 'Number'
         , 'SQLException'
         , 'Entity'
         , 'entity/Transportador'
         , 'entity/OrdemDeProducao'
         , 'entity/brindart/OrdemDeProducao'
         , 'loader/Transportador'
         , 'ponto/Day'
         , 'ponto/Interval'
         , 'ponto/Util'
         , 'ViewHelper' ];

forEach($files as $file)
  require_once __DIR__ . '/' . $file . '.php';
