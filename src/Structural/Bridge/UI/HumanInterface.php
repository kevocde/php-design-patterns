<?php

namespace Kevocde\PhpDesignPatterns\Structural\Bridge\UI;

class HumanInterface implements IInterface {

  /**
   * @param string $module_name
   * @return void
   */
  public function enable(string $module_name): void {
    echo $module_name . " module was enabled\n";
  }

  /**
   * @param string $module_name
   * @return void
   */
  public function disable(string $module_name): void{
    echo $module_name . " module was disabled\n";
  }

  /**
   * @param string $module_name
   * @param array $parameters
   * @return void
   */
  public function printParameters(string $module_name, array $parameters): void {
    echo "Parameters for " . $module_name . " module:\n";
    foreach ($parameters as $key => $value) {
      echo $key . ": " . $value . "\n";
    }
  }
}