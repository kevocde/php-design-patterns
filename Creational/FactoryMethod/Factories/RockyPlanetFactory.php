<?php

namespace Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Factories;

use Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Planets\PlanetInterface;
use Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Factories\PlanetFactory;
use Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Planets\RockyPlanet;

class RockyPlanetFactory extends PlanetFactory {
  public function createPlanet(): PlanetInterface {
    return new RockyPlanet();
  }
}