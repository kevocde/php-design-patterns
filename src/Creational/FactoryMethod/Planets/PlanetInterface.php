<?php

namespace Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Planets;

interface PlanetInterface {
  public function orbit(): void;
  public function rotate(): void;
  public function collect(PlanetInterface $planet): PlanetInterface;
  public function setName(string $name): void;
  public function getName(): string;
  public function setRotationVelocity(float $rotation_velocity): void;
  public function getRotationVelocity(): float;
  public function setOrbitalVelocity(float $orbital_velocity): void;
  public function getOrbitalVelocity(): float;
}