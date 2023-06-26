<?php

namespace Kevocde\PhpDesignPatterns\Structural\Composite;

class File implements Archive {
  protected string $location;
  protected string $name;
  protected int $size;

  public function __construct(string $location, string $name, int $size) {
    $this->location = $location;
    $this->name = $name;
    $this->size = $size;
  }

  public function getName(): string {
    return $this->name;
  }

  /**
   * @inheritDoc
   */
  public function getSize(): int {
    return $this->size;
  }

  /**
   * @inheritDoc
   */
  public function moveLocation(string $location): void {
    $this->location = $location;
  }
}