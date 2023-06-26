<?php

namespace Kevocde\PhpDesignPatterns\Structural\Bridge\Modules;

use Kevocde\PhpDesignPatterns\Structural\Bridge\UI\IInterface;

class DriveModule extends Module {
  protected string $module_id = 'drive_module';

  public function __construct(array $parameters, IInterface $interface) {
    parent::__construct($parameters, $interface);
  }
}