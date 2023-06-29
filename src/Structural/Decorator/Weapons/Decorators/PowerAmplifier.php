<?php

namespace Kevocde\PhpDesignPatterns\Structural\Decorator\Weapons\Decorators;

use Kevocde\PhpDesignPatterns\Structural\Decorator\Weapons\IWeapon;

class PowerAmplifier extends AWeaponDecorator implements IWeapon {

  public function shoot(): void {
    $power = $this->wrappee->getPowerLevel();
    $frequency = $this->wrappee->getFrequency();

    $this->wrappee->setPowerLevel($power * 2.54);
    $this->wrappee->setFrequency($frequency - ($frequency * 0.4));

    $this->wrappee->shoot();
    echo <<<EOT
[Power amplifier added]

EOT;
  }
}