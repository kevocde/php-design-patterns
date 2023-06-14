<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces;

interface IShieldSystem {
  public function activate(): void;
  public function deactivate(): void;
  public function getShieldLevel(): float;
  public function setShieldLevel(float $shieldLevel): void;
}
