<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder\Builders;

use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\Asteroid;
use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\Comet;
use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\Planet;
use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\Satellite;
use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\Star;
use Kevocde\PhpDesignPatterns\Creational\Builder\PlanetarySystem;

interface IPlanetarySystemBuilder {
  public function reset(string $id): void;
  public function addStar(Star $star): void;
  public function addPlanet(Planet $planet): void;
  public function addSatellite(Satellite $satellite): void;
  public function addComet(Comet $comet): void;
  public function addAsteroid(Asteroid $asteroid): void;
  public function make(): PlanetarySystem;
}