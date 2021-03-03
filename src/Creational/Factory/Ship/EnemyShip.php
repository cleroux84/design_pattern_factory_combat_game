<?php

namespace Patterns\Creational\Factory\Ship;

use Patterns\Creational\Factory\Interfaces\IEnemyShipInterface;

class EnemyShip implements IEnemyShipInterface {

    protected int $damage = 10;
    protected string $label = 'an enemy ship';

    public function attack($heroShip): void
    {
        $heroShip->setPoints($this->damage); 
    }
    
}

