<?php

namespace Patterns\Creational\Factory\Ship;

use Patterns\Creational\Factory\Interfaces\IEnemyShipInterface;

class UfoEnemyShip implements IEnemyShipInterface {

    protected int $damage = 30;
    protected string $label = 'a ufo enemy ship';


    public function attack($heroShip): void
    {
        $heroShip->setPoints($this->damage); 
    }
    
}

