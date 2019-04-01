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
    public function     __construct()
    {
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
        $this->timestamp = $timestamp;
    }




}