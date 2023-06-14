<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Factories;

use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\{IEngine, IArmament, IShieldSystem};

interface ISpaceshipFactory {
  public function createEngine(): IEngine;
  public function createArmament(): IArmament;
  public function createShieldSystem(): IShieldSystem;
}
