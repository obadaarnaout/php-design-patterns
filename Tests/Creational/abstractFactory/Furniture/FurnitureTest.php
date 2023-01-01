<?php

use Creational\abstractFactory\Furniture\Chair\Chair;
use Creational\abstractFactory\Furniture\CoffeeTable\CoffeeTable;
use Creational\abstractFactory\Furniture\ModernFurnitureFactory;
use Creational\abstractFactory\Furniture\Sofa\Sofa;
use Creational\abstractFactory\Furniture\VictorianFurnitureFactory;
use PHPUnit\Framework\TestCase;

class FurnitureTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testCanCreateModernChair()
    {
        $factory = new ModernFurnitureFactory();
        $furniture = $factory->createChair();
        $this->assertInstanceOf(Chair::class,$furniture);
    }

    public function testCanCreateModernCoffeeTable()
    {
        $factory = new ModernFurnitureFactory();
        $furniture = $factory->createCoffeeTable();
        $this->assertInstanceOf(CoffeeTable::class,$furniture);
    }

    public function testCanCreateModernSofa()
    {
        $factory = new ModernFurnitureFactory();
        $furniture = $factory->createSofa();
        $this->assertInstanceOf(Sofa::class,$furniture);
    }

    public function testCanCreateVictorianChair()
    {
        $factory = new VictorianFurnitureFactory();
        $furniture = $factory->createChair();
        $this->assertInstanceOf(Chair::class,$furniture);
    }

    public function testCanCreateVictorianCoffeeTable()
    {
        $factory = new VictorianFurnitureFactory();
        $furniture = $factory->createCoffeeTable();
        $this->assertInstanceOf(CoffeeTable::class,$furniture);
    }

    public function testCanCreateVictorianSofa()
    {
        $factory = new VictorianFurnitureFactory();
        $furniture = $factory->createSofa();
        $this->assertInstanceOf(Sofa::class,$furniture);
    }
}