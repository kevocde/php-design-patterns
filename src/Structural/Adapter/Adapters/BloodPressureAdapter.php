<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter\Adapters;

use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\BloodPressure;

class BloodPressureAdapter implements IDeviceAdapter {

  /**
   * @param BloodPressure $device
   * @return array
   */
  public static function getData($device): array {
    $data = $device->getData();

    return [
      'blood_pressure' => [
        'data' => $data,
        'units' => 'mmHg',
        'count' => count($data),
      ],
    ];
  }
}