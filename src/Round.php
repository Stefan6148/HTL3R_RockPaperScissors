<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 04.03.2019
 * Time: 11:28
 */

namespace HTL3R\RockPaperScissors;
/**
 * @Entity @Table(name="rounds")
 **/
class Round
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="integer", nullable=true) **/
    protected $player;
    /** @Column(type="integer", nullable=true) **/
    protected $computer;
    /** @Column(type="datetime", nullable=true) **/
    protected $timestamp;

    /**
     * Round constructor.
     */

    public function     __construct($player,$computer)
    {
        $this->timestamp = new \DateTime();
        $this->player = $player;
        $this->computer = $computer;

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * @return mixed
     */
    public function getComputer()
    {
        return $this->computer;
    }

    /**
     * @param mixed $computer
     */
    public function setComputer($computer)
    {
        $this->computer = $computer;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = new \DateTime();
    }

    public function getAsArray(){
        return ['id' => $this->getId(), 'player' => $this->getChoiceAsString($this->getPlayer()), 'computer' => $this->getChoiceAsString($this->getComputer()), 'timestamp' => date_format($this->getTimestamp(), 'd/m/Y H:i:s'), 'outcome' => GameEvaluator::evaluate($this->player, $this->computer)];
    }

    public function getChoiceAsString($choice){
        switch ($choice){
            case 0:
                return "Rock";
            case 1:
                return "Paper";
            case 2:
                return "Scissors";
        }
    }


}