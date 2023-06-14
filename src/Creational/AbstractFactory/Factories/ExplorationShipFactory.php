<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Factories;

use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\{IEngine, IArmament, IShieldSystem};
use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\Engines\WarpEngine;
use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\Armament\QuantumArmament;
use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\Shields\ATShield;

class ExplorationShipFactory implements ISpaceshipFactory {
  public function createEngine(): IEngine {
    return new WarpEngine();
  }

  public function createArmament(): IArmament {
    return new QuantumArmament();
  }

  public function createShieldSystem(): IShieldSystem {
    return new ATShield();
  }
}
