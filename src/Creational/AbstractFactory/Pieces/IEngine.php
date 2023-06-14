<?php

namespace Kevocde\PhpDesignPatterns\Creational\AbstractFactory\Pieces;

interface IEngine {
  public function start(): void;
  public function stop(): void;
  public function getAcceleration(): float;
  public function setAcceleration(float $acceleration): void;
}
