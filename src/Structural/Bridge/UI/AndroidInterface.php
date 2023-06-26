<?php

namespace Kevocde\PhpDesignPatterns\Structural\Bridge\UI;

class AndroidInterface implements IInterface {
  public function enable(string $module_name): void {
    $message = $module_name . " module was enabled";
    echo chr(ord($message)) . '\n';
  }

  public function disable(string $module_name): void {
    $message = $module_name . " module was disabled";
    echo chr(ord($message)) . '\n';
  }

  public function printParameters(string $module_name, array $parameters): void {
    $json = json_encode($parameters);
    echo chr(ord($json)) . '\n';
  }
}