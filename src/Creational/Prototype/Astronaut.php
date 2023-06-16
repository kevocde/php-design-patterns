<?php

namespace Kevocde\PhpDesignPatterns\Creational\Prototype;

class Astronaut {
  private string $name;
  private Mission $mission;

  public function __construct(string $name, Mission $mission) {
    $this->name = $name;
    $this->mission = $mission;
  }

  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name): void {
    $this->name = $name;
  }

  public function getMission(): Mission {
    return $this->mission;
  }

  public function setMission(Mission $mission): void {
    $this->mission = $mission;
  }

  public function __clone() {
    $this->mission = clone $this->mission;
  }
}
