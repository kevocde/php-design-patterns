<?php

namespace Kevocde\PhpDesignPatterns\Structural\Decorator\Weapons;

class PhotonTorpedo extends AWeapon implements IWeapon {
  public function shoot(): void {
    $power_level = $this->getPowerLevel();
    $scope = $this->getScope();
    $frequency = $this->getFrequency();

    echo <<<EOT
Photon torpedo shooted, configurated in:
  Power level: $power_level kW
  Scope: $scope au
  Frequency: $frequency GHz

EOT;
  }
}