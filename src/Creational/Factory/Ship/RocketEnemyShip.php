<?php

namespace Patterns\Creational\Factory\Ship;

use Patterns\Creational\Factory\Interfaces\IEnemyShipInterface;

class RocketEnemyShip implements IEnemyShipInterface {

    protected int $damage = 20;
    protected string $label = 'a rocket enemy ship';


    public function attack($heroShip): void
    {
        $heroShip->setPoints($this->damage); 
    }
    
}
