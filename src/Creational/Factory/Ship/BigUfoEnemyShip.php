<?php

namespace Patterns\Creational\Factory\Ship;

use Patterns\Creational\Factory\Interfaces\IEnemyShipInterface;

class BigUfoEnemyShip implements IEnemyShipInterface 
{
    protected int $damage = 40;
    protected string $label = 'a big ufo enemy ship';

    public function attack($heroShip): void
    {
        $heroShip->setPoints($this->damage); 
    }
    
}

