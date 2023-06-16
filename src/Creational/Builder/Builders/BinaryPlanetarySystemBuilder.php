<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder\Builders;

use Kevocde\PhpDesignPatterns\Creational\Builder\PlanetarySystem;
use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\{Star, Asteroid, Comet, Planet, Satellite};

class BinaryPlanetarySystemBuilder implements IPlanetarySystemBuilder {
  /**
   * Define the planetary system
   *
   * @var PlanetarySystem
   */
  protected PlanetarySystem $planetarySystem;

  public function reset(string $id): void {
    $this->planetarySystem = new PlanetarySystem($id);
  }

  public function addStar(Star $star): void {
    $this->planetarySystem->addStart($star);
  }

  public function addPlanet(Planet $planet): void {
    $this->planetarySystem->addPlanet($planet);
  }

  public function addSatellite(Satellite $satellite): void {
    $this->planetarySystem->addSatellite($satellite);
  }

  public function addComet(Comet $comet): void {
    $this->planetarySystem->addComet($comet);
  }

  public function addAsteroid(Asteroid $asteroid): void {
    $this->planetarySystem->addAsteroid($asteroid);
  }

  public function make(): PlanetarySystem {
    return $this->planetarySystem;
  }
}
