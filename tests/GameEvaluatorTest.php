<?php
use \PHPUnit\Framework\TestCase;
use HTL3R\RockPaperScissors\GameEvaluator;

class GameEvaluatorTest extends TestCase
{

    /**
     * @test
     */
    public function testEvaluate() {
        $player = 0;
        $erg = GameEvaluator::evaluate($player,0);
        print $erg;
        $this->assertSame('DRAW', $erg);
    }
}