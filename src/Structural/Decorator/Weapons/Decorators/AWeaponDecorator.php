<?php

namespace Kevocde\PhpDesignPatterns\Structural\Decorator\Weapons\Decorators;

use Kevocde\PhpDesignPatterns\Structural\Decorator\Weapons\AWeapon;
use Kevocde\PhpDesignPatterns\Structural\Decorator\Weapons\IWeapon;

abstract class AWeaponDecorator implements IWeapon {
  protected AWeapon $wrappee;

  public function __construct(AWeapon $wrappee) {
    $this->wrappee = $wrappee;
  }
}
