<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter\Meters;

class Glucometer {
  protected array $data = [];
  protected int $startTimestamp = 0;

  public function startMeasuring(): void {
    $this->startTimestamp = time();
  }

  public function stopMeasuring(): void {
    $this->data = array_map(function ($time) {
      return [
        'timestamp' => $this->startTimestamp + $time,
        'value' => rand(80, 120),
      ];
    }, range($this->startTimestamp, time()));

    $this->startTimestamp = 0;
  }

  public function reset(): void {
    $this->data = [];
    $this->startTimestamp = 0;
  }

  public function getData(): array {
    return $this->data;
  }
}