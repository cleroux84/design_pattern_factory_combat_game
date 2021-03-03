<?php

namespace Patterns\Creational\Factory\Interfaces;
use Patterns\Creational\Factory\Interfaces\IHeroShipInterface;


Interface IEnemyShipInterface 
{
    public function attack(IHeroShipInterface $heroShip);
}