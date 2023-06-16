<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder;

use Kevocde\PhpDesignPatterns\Creational\Builder\PlanetarySystem;
use Kevocde\PhpDesignPatterns\Creational\Builder\Builders\{IPlanetarySystemBuilder, BinaryPlanetarySystemBuilder};

require_once __DIR__ . '/../../../vendor/autoload.php';

// Director

class Director {
  protected IPlanetarySystemBuilder $builder;

  public function __construct(IPlanetarySystemBuilder $builder) {
    $this->builder = $builder;
  }

  public function makeBinaryPlanetarySystem(): PlanetarySystem {
    $this->builder->reset('milk_way');
    $this->builder->addStar(new Astros\Star('proxima_centaury_a'));
    $this->builder->addStar(new Astros\Star('proxima_centaury_b'));
    $this->builder->addPlanet(new Astros\Planet('Bitelgeuse'));

    return $this->builder->make();
  }
}

// Client
$director = new Director(new BinaryPlanetarySystemBuilder());
$planetary_system = $director->makeBinaryPlanetarySystem();

echo $planetary_system;
