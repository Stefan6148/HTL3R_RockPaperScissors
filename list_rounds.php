<?php
// list_products.php
require_once "bootstrap.php";

$roundRepository = $entityManager->getRepository('HTL3R\RockPaperScissors\Round');
$rounds = $roundRepository->findAll();

foreach ($rounds as $round) {
    echo sprintf("-%s\n", $round->getPlayer());
}