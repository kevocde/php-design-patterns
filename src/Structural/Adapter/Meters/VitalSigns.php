<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter\Meters;

class VitalSigns {
  protected array $data = [];
  protected int $startTimestamp = 0;

  public function startMeasuring(): void {
    $this->startTimestamp = time();
  }

  public function stopMeasuring(): void {
    $this->data = array_map(function ($time) {
      return [
        'timestamp' => $this->startTimestamp + $time,
        'value' => [
          'temperature' => rand(36, 37) . '.' . rand(0, 9),
          'heart_rate' => rand(60, 100),
          'respiratory_rate' => rand(12, 20),
        ],
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