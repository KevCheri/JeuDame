
<?php

require 'vendor/autoload.php';
use Classe\Damier;
use Classe\Map;
use Classe\Player;
use Classe\Game;

$map = new Damier($_GET['map-size'] ?? 10);
$numberItemByPlayer = pow($map, 2)*0.2;
$playerOne= new Player('Bichon', pow($map, 2)*0.2);
$playerTwo= new Player('Bozzo',pow($map, 2)*0.2);
$board = new Map($_GET['map-size'] ?? 10);
$game = new Game($playerOne, $playerTwo, $board);
$game->displayHtml();



