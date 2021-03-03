<?php declare(strict_types=1);

namespace Tests\Creational;

use Patterns\Creational\Factory\BigUfoEnemyShipFactory;
use Patterns\Creational\Factory\EnemyShipFactory;
use Patterns\Creational\Factory\RocketEnemyShipFactory;
use Patterns\Creational\Factory\Ship\BigUfoEnemyShip;
use Patterns\Creational\Factory\Ship\EnemyShip;
use Patterns\Creational\Factory\Ship\HeroShip;
use Patterns\Creational\Factory\Ship\RocketEnemyShip;
use Patterns\Creational\Factory\Ship\UfoEnemyShip;
use Patterns\Creational\Factory\ShipFactoryDirector;
use Patterns\Creational\Factory\UfoEnemyShipFactory;
use PHPUnit\Framework\TestCase;


final class FactoryTest extends TestCase {
   
    public function testThatFactoryDirectorEnemyShipIsWorking()
    {
        $shipFactoryDirector = new ShipFactoryDirector();
        $enemyShipFactory = $shipFactoryDirector->createFactory('E');
        $this->assertInstanceOf(EnemyShipFactory::class, $enemyShipFactory);
    }

    public function testThatFactoryDirectorRocketIsWorking()
    {
        $shipFactoryDirector = new ShipFactoryDirector();
        $rocketEnemyShipFactory = $shipFactoryDirector->createFactory('R');
        $this->assertInstanceOf(RocketEnemyShipFactory::class, $rocketEnemyShipFactory);
    }

    public function testThatFactoryDirectorUfoIsWorking()
    {
        $shipFactoryDirector = new ShipFactoryDirector();
        $ufoEnemyShipFactory = $shipFactoryDirector->createFactory('U');
        $this->assertInstanceOf(UfoEnemyShipFactory::class, $ufoEnemyShipFactory);
    }

    public function testThatFactoryDirectorBigUfoIsWorking()
    {
        $shipFactoryDirector = new ShipFactoryDirector();
        $bigUfoEnemyShipFactory = $shipFactoryDirector->createFactory('B');
        $this->assertInstanceOf(BigUfoEnemyShipFactory::class, $bigUfoEnemyShipFactory);
    }

    public function testThatEnemyShipFactoryIsWorking()
    {
        $enemyShipFactory = new EnemyShipFactory();
        $enemyShip = $enemyShipFactory->getShip();
        $this->assertInstanceOf(EnemyShip::class, $enemyShip);
    }

    public function testThatRocketEnemyShipFactoryIsWorking()
    {
        $enemyShipFactory = new RocketEnemyShipFactory();
        $rocketEnemyShip = $enemyShipFactory->getShip();
        $this->assertInstanceOf(RocketEnemyShip::class, $rocketEnemyShip);
    }

    public function testThatUfoEnemyShipFactoryIsWorking()
    {
        $enemyShipFactory = new UfoEnemyShipFactory();
        $ufoEnemyShip = $enemyShipFactory->getShip();
        $this->assertInstanceOf(UfoEnemyShip::class, $ufoEnemyShip);
    }

    public function testThatBigUfoEnemyShipFactoryIsWorking()
    {
        $enemyShipFactory = new BigUfoEnemyShipFactory();
        $bigUfoEnemyShip = $enemyShipFactory->getShip();
        $this->assertInstanceOf(BigUfoEnemyShip::class, $bigUfoEnemyShip);
    }

    public function testThatEnemyShipAttackIsWorking()
    {
        $enemyShipFactory = new EnemyShipFactory();
        $enemyShip = $enemyShipFactory->getShip();
        $heroShip = new HeroShip();
        $enemyShip->attack($heroShip);
        $result = $heroShip->getPoints();
        $this->assertSame(190, $result);
    }

    public function testThatBigUfoShipAttackIsWorking()
    {
        $bigUfoEnemyShipFactory = new BigUfoEnemyShipFactory();
        $bigUfoEnemyShip = $bigUfoEnemyShipFactory->getShip();
        $heroShip = new HeroShip();
        $bigUfoEnemyShip->attack($heroShip);
        $result = $heroShip->getPoints();
        $this->assertSame(160, $result);
    }

    public function testThatUfoShipAttackIsWorking()
    {
        $ufoEnemyShipFactory = new UfoEnemyShipFactory();
        $ufoEnemyShip = $ufoEnemyShipFactory->getShip();
        $heroShip = new HeroShip();
        $ufoEnemyShip->attack($heroShip);
        $result = $heroShip->getPoints();
        $this->assertSame(170, $result);
    }

    public function testThatRocketShipAttackIsWorking()
    {
        $rocketEnemyShipFactory = new RocketEnemyShipFactory();
        $rocketEnemyShip = $rocketEnemyShipFactory->getShip();
        $heroShip = new HeroShip();
        $rocketEnemyShip->attack($heroShip);
        $result = $heroShip->getPoints();
        $this->assertSame(180, $result);
    }

    public function testThatMultipleAttackIsWorking()
    {
        $rocketEnemyShipFactory = new RocketEnemyShipFactory();
        $rocketEnemyShip = $rocketEnemyShipFactory->getShip();
        $ufoEnemyShipFactory = new UfoEnemyShipFactory();
        $ufoEnemyShip = $ufoEnemyShipFactory->getShip();
        $heroShip = new HeroShip();
        $rocketEnemyShip->attack($heroShip);
        $ufoEnemyShip->attack($heroShip);
        $result = $heroShip->getPoints();
        $this->assertSame(150, $result);
    }

}