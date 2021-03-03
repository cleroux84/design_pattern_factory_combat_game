<?php

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Interfaces\IHeroShipInterface;
use Patterns\Creational\Factory\Interfaces\IShipFactoryInterface;
use Patterns\Creational\Factory\Ship\HeroShip;

class HeroShipFactory implements IShipFactoryInterface
{
    protected function create(): IHeroShipInterface
    {
        $points = 200;
        return new HeroShip($points);
    }

    public function getShip(): IHeroShipInterface
    {
        return $this->create();
    }
   
}