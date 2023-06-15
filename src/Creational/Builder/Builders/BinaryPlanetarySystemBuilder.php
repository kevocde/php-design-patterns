<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder;

use Kevocde\PhpDesignPatterns\Creational\Builder\PlanetarySystem;
use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\{Star, Asteroid, Comet, Planet, Satellite};

class BinaryPlanetarySystemBuilder implements IPlanetarySystemBuilder {
  /**
   * Define the planetary system
   *
   * @var PlanetarySystem
   */
  protected PlanetarySystem $planetarySystem;

  public function reset(string $id) {
    $this->planetarySystem = new PlanetarySystem($id);
  }

  public function addStar(Star $star): void {
    $this->planetarySystem->addStart($star);
  }

  public function addPlanet(Asteroid $planet): void {
    $this->planetarySystem->addPlanet($planet);
  }

  public function addSatellite(Comet $satellite): void {
    $this->planetarySystem->addSatellite($satellite);
  }

  public function addComet(Planet $comet): void {
    $this->planetarySystem->addComet($comet);
  }

  public function addAsteroid(Satellite $asteroid): void {
    $this->planetarySystem->addAsteroid($asteroid);
  }

  public function make(): PlanetarySystem {
    return $this->planetarySystem;
  }
}
