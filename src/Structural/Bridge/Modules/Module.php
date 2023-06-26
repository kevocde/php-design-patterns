<?php

namespace Kevocde\PhpDesignPatterns\Structural\Bridge\Modules;

use Exception;
use Kevocde\PhpDesignPatterns\Structural\Bridge\UI\IInterface;

abstract class Module {
  protected string $module_id = 'base_moduel';

  protected array $parameters;
  protected bool $enabled = false;

  protected IInterface $interface;

  protected function __construct(array $parameters, IInterface $interface) {
    $this->parameters = $parameters;
    $this->interface = $interface;
  }

  /**
   * @throws Exception
   */
  public function enable(): void {
    if (!$this->enabled) {
      $this->enabled = true;
      $this->interface->enable($this->module_id);
    }
    else {
      throw new Exception('Module already enabled');
    }
  }

  /**
   * @throws Exception
   */
  public function disable(): void {
    if ($this->enabled) {
      $this->enabled = false;
      $this->interface->enable($this->module_id);
    }
    else {
      throw new Exception('Module already disabled');
    }
  }

  /**
   * @return bool
   */
  public function isEnabled(): bool {
    return $this->enabled;
  }

  /**
   * @return array
   */
  public function getParameters(): array {
    $this->interface->printParameters($this->module_id, $this->parameters);
    return $this->parameters;
  }

  public function changeUI(IInterface $interface): void {
    $this->interface = $interface;
  }
}
