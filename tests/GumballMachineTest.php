<?php
/**
 * Created by PhpStorm.
 * User: aGodinez
 * Date: 2018-12-20
 * Time: 16:41
 */

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit\Framework\TestCase
{
    public $gumballMachineInstance;

    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }

    public function testIfWheelWorks()
    {
        $this->gumballMachineInstance->setGumballs(100);
        $this->gumballMachineInstance->turnWheel();
        $this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
    }
}