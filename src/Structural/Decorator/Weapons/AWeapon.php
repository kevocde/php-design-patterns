<?php

namespace Kevocde\PhpDesignPatterns\Structural\Decorator\Weapons;

abstract class AWeapon {
  protected float $power_level;
  protected float $scope;
  protected float $frequency;

  public function __construct(float $power_level, float $scope, float $frequency) {
    $this->power_level = $power_level;
    $this->scope = $scope;
    $this->frequency = $frequency;
  }

  /**
   * @return float
   */
  public function getPowerLevel(): float {
    return $this->power_level;
  }

  /**
   * @param float $power_level
   */
  public function setPowerLevel(float $power_level): void {
    $this->power_level = $power_level;
  }

  /**
   * @return float
   */
  public function getScope(): float {
    return $this->scope;
  }

  /**
   * @param int $scope
   */
  public function setScope(int $scope): void {
    $this->scope = $scope;
  }

  /**
   * @return float
   */
  public function getFrequency(): float {
    return $this->frequency;
  }

  /**
   * @param float $frequency
   */
  public function setFrequency(float $frequency): void {
    $this->frequency = $frequency;
  }
}