<?php

namespace Patterns\Creational\Factory\Ship;

use Patterns\Creational\Factory\Interfaces\IHeroShipInterface;

class HeroShip implements IHeroShipInterface 
{

    protected $points = 200;

    public function setPoints($damage)
    {
        $this->points = $this->points - $damage;
    }
    
    public function getPoints()
    {
        return $this->points;
    }
    
}