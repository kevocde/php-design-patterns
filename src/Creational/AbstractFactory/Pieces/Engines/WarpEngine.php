<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\Engines;

use Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces\IEngine;

class WarpEngine implements IEngine {
  protected bool $started = false;
  protected float $acceleration = 0.0;

  public function start(): void {
    echo "Warped to $this->acceleration!\n";
    $this->started = true;
  }

  public function stop(): void {
    $this->started = false;
  }

  public function getAcceleration(): float {
    return $this->acceleration;
  }

  public function setAcceleration(float $acceleration): void {
    $this->acceleration = $acceleration;
  }
}
