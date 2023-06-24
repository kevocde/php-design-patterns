<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter\Adapters;

use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\Glucometer;

class GlucometerAdapter implements IDeviceAdapter {

  /**
   * @param Glucometer $device
   * @return array
   */
  public static function getData($device): array {
    $data = $device->getData();

    return [
      'glucose' => [
        'data' => $data,
        'units' => 'mg/dL',
        'count' => count($data),
      ],
    ];
  }
}