<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\Armament;

use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\IArmament;

class QuantumArmament implements IArmament {
  protected float $power = 0.0;

  public function fire(): void {
    echo "Quantum armament fired with {$this->power}W!\n";
  }

  public function getPower(): float {
    return $this->power;
  }

  public function setPower(float $power): void {
    $this->power = $power;
  }
}
