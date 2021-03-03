<?php

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Interfaces\IEnemyShipInterface;
use Patterns\Creational\Factory\Interfaces\IShipFactoryInterface;
use Patterns\Creational\Factory\Ship\RocketEnemyShip;

class RocketEnemyShipFactory implements IShipFactoryInterface
{    
    protected function create(): IEnemyShipInterface
    {

        $ennemyShip = new RocketEnemyShip();
        return $ennemyShip;
    }

    public function getShip(): IEnemyShipInterface
    {
        return $this->create();
    }
}