<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\Shields;

use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\IShieldSystem;

class ATShield implements IShieldSystem {
  protected bool $activated = false;
  protected float $level = 0.0;

  public function activate(): void {
    echo "AT shield activated to {$this->level} level!\n";
    $this->activated = true;
  }

  public function deactivate(): void {
    $this->activated = false;
  }

  public function getShieldLevel(): float {
    return $this->level;
  }

  public function setShieldLevel(float $level): void {
    $this->level = $level;
  }
}
