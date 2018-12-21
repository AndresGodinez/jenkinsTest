<?php
/**
 * Created by PhpStorm.
 * User: aGodinez
 * Date: 2018-12-20
 * Time: 16:36
 */

class GumballMachine
{
    private $gumballs;

    public function getGumballs()
    {
        return $this->gumballs;
    }

    public function setGumballs($amount)
    {
        $this->gumballs = $amount;
    }

    public function turnWheel()
    {
        $this->setGumballs($this->getGumballs()-1);
    }
}