<?php

namespace Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Planets;

abstract class BasePlanet {
  protected string $name;
  protected float $rotationVelocity;
  protected float $orbitalVelocity;

  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name): void {
    $this->name = $name;
  }

  public function getRotationVelocity(): float {
    return $this->rotationVelocity;
  }

  public function setRotationVelocity(float $rotation_velocity): void {
    $this->rotationVelocity = $rotation_velocity;
  }

  public function getOrbitalVelocity(): float {
    return $this->orbitalVelocity;
  }

  public function setOrbitalVelocity(float $orbital_velocity): void {
    $this->orbitalVelocity = $orbital_velocity;
  }
}
