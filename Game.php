
<?php

require 'vendor/autoload.php';
use Classe\Damier;
use Classe\Map;

$map = new Damier($_GET['map-size'] ?? 8);
$board = new Map($_GET['map-size'] ?? 8);
$board->displayHtml();



