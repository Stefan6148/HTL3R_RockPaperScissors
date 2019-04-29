<?php
use \PHPUnit\Framework\TestCase;
use HTL3R\RockPaperScissors\GameEvaluator;

class GameEvaluatorTest extends TestCase
{

    /**
     * @test
     */
    public function testEvaluateRock() {
        $player = 0;
        $erg = GameEvaluator::evaluate($player,0);
        $this->assertSame('DRAW', $erg);
        $erg = GameEvaluator::evaluate($player,1);
        $this->assertSame('DEFEAT', $erg);
        $erg = GameEvaluator::evaluate($player,2);
        $this->assertSame('VICTORY', $erg);
    }
}