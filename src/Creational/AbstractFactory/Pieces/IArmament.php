<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces;

interface IArmament {
  public function fire(): void;
  public function getPower(): float;
  public function setPower(float $power): void;
}
