<?php

$files = [ 'Optional'
         , 'Absent'
         , 'Present'
         , 'Collection'
         , 'Text'
         , 'Entity'
         , 'entity/Transportador'
         , 'entity/OrdemDeProducao'
         , 'loader/Transportador'
         , 'ViewHelper' ];

forEach($files as $file)
  require_once __DIR__ . '/' . $file . '.php';
