<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 29.04.2019
 * Time: 08:32
 */

namespace HTL3R\RockPaperScissors;


class GameEvaluator
{
    static function evaluate($player,$cpu){
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
}