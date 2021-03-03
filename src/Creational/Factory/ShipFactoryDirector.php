<?php

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Interfaces\IShipFactoryInterface;

class ShipFactoryDirector /* implements IShipFactoryInterface */
{

    public function createFactory($key): IShipFactoryInterface
    {

       switch($key) {
        case 'E': 
            return new EnemyShipFactory();
            break;
        case 'R':
            return new RocketEnemyShipFactory();
            break;
        case 'U':
            return new UfoEnemyShipFactory();
            break;
        case 'B':
            return new BigUfoEnemyShipFactory();
            break;
        default:
            break;
       }
    }
}