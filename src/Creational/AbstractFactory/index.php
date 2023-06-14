<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory;

use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Factories\ISpaceshipFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

final class Shipyard {
  private ISpaceshipFactory $spaceshipFactory;

  public function __construct(ISpaceshipFactory $spacheship_factory) {
    $this->spaceshipFactory = $spacheship_factory;
  }

  public function createSpaceship(): array {
    return [
      $this->spaceshipFactory->createEngine(),
      $this->spaceshipFactory->createArmament(),
      $this->spaceshipFactory->createShieldSystem(),
    ];
  }
}

// Create a new shipyard
$shipyard = new Shipyard(new Factories\ExplorationShipFactory());
list($engine, $armament, $shield) = $shipyard->createSpaceship();

// Test engine
$engine->setAcceleration(1.0);
$engine->start();

// Test armament
$armament->setPower(1.0);
$armament->fire();

// Test shield system
$shield->setShieldLevel(1.0);
$shield->activate();
