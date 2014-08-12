<?php

/*
  Iniciando namespaces
*/

include_once "app/config/autoload.php";

use app\config;
use app\unaclase;
$config = new config\config();
echo $config->config();
$clase = new unaclase();
echo $clase->demo();





?>
