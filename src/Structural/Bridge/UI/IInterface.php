<?php

namespace Kevocde\PhpDesignPatterns\Structural\Bridge\UI;

interface IInterface {
  public function enable(string $module_name): void;

  public function disable(string $module_name): void;

  public function printParameters(string $module_name, array $parameters): void;
}
