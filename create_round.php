<?php

use HTL3R\RockPaperScissors\Round;
require_once "bootstrap.php";

$testRound = 1;

$round = new Round();
$round->setPlayer($testRound);

$entityManager->persist($round);
$entityManager->flush();

echo "Created Round with ID " . $round->getPlayer() . "\n";