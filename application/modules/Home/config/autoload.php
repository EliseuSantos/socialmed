<?php
$folder = explode('/', dirname(__FILE__));
$modulo = array_slice($folder, -2, 1)[0];
  $autoload['config'] = array($modulo . '/config.php');
