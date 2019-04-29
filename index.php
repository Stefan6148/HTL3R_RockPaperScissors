<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 10.12.2018
 * Time: 10:20
 */
use HTL3R\RockPaperScissors\Round;

require_once 'vendor/autoload.php';
require_once "bootstrap.php";

if (isset($_GET['player'])) {
    header('Content-Type: application/json');

    $cpuChoice = rand(0, 2);

    function evaluateGame($player,$cpu){
        switch ($player - $cpu) {
            case 0:
                $answer = "DRAW";
                break;
            case -1:
                $answer = "DEFEAT";
                break;
            case 2:
                $answer = "DEFEAT";
                break;
            case -2:
                $answer = "VICTORY";
                break;
            case 1:
                $answer = "VICTORY";
                break;
        }
        return $answer;
    }

    echo json_encode(['answer' => evaluateGame($_GET['player'],$cpuChoice), 'choice' => $cpuChoice]);

    $round = new Round($_GET['player'],$cpuChoice);
    $entityManager->persist($round);
    $entityManager->flush();

} else if (isset($_GET['stats']) && $_GET['stats'] == "true") {

    // fetch the statistics
    $roundRepository = $entityManager->getRepository('HTL3R\RockPaperScissors\Round');
    $rounds = $roundRepository->findAll();
    $fluidRounds = [];
    foreach ($rounds as $round) {
        array_push($fluidRounds, $round->getAsArray());
    }

    // render the view
    $view = new \TYPO3Fluid\Fluid\View\TemplateView();
    $paths = $view->getTemplatePaths();
    $view->assignMultiple([
        'rounds' => $fluidRounds
    ]);

    $paths->setTemplatePathAndFilename(__DIR__ . '/Templates/statistics.html');
    $paths = $view->getTemplatePaths();

    $output = $view->render();
    echo $output;

} else {

    // render the view
    $view = new \TYPO3Fluid\Fluid\View\TemplateView();
    $paths = $view->getTemplatePaths();
    $paths->setTemplatePathAndFilename(__DIR__ . '/Templates/index.html');
    $paths = $view->getTemplatePaths();

    $output = $view->render();
    echo $output;

}



