<?php

namespace Kevocde\PhpDesignPatterns\Creational\Prototype;

class Mission {
  private string $name;
  private int $duration;

  public function __construct(string $name, int $duration) {
    $this->name = $name;
    $this->duration = $duration;
  }

  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name): void {
    $this->name = $name;
  }

  public function getDuration(): int {
    return $this->duration;
  }

  public function setDuration(int $duration): void {
    $this->duration = $duration;
  }
}
