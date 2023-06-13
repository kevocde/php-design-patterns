<?php

namespace Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Planets;

class RockyPlanet extends BasePlanet implements PlanetInterface {
  public function orbit(): void {
    echo "Rocky $this->name planet orbiting\n";
  }

  public function rotate(): void {
    echo "Rocky $this->name planet rotating\n";
  }

  public function collect(PlanetInterface $planet): PlanetInterface {
    if ($planet !== $this) {
      $newPlanet = new RockyPlanet();
      $newPlanet->setName($this->name . '_' . $planet->name);
      $newPlanet->setRotationVelocity($this->rotationVelocity + $planet->rotationVelocity);
      $newPlanet->setOrbitalVelocity($this->orbitalVelocity + $planet->orbitalVelocity);

      return $newPlanet;
    }
    else {
      return $this;
    }
  }
}