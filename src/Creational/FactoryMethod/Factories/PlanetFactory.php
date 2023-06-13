<?php

namespace Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Factories;

use Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Planets\PlanetInterface;

abstract class PlanetFactory {
  public abstract function createPlanet(): PlanetInterface;
}