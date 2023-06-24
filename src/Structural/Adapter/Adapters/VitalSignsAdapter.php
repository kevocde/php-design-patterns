<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter\Adapters;

use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\VitalSigns;

class VitalSignsAdapter implements IDeviceAdapter {
    /**
    * @param VitalSigns $device
    * @return array
    */
    public static function getData($device): array {
      $data = $device->getData();
      $buffer = [];

      foreach ($data as $vital_unit) {
        $keys = array_keys($vital_unit['value']);
        foreach ($keys as $key) {
          if (!isset($buffer[$key])) {
            $buffer[$key] = [];
          }

          $buffer[$key][] = [
            'timestamp' => $vital_unit['timestamp'],
            'value' => $vital_unit['value'][$key],
          ];
        }
      }

      return [
        'temperature' => [
          'data' => $buffer['temperature'],
          'units' => 'mmHg',
          'count' => count($buffer['temperature']),
        ],
        'heart_rate' => [
          'data' => $buffer['heart_rate'],
          'units' => 'ppm',
          'count' => count($buffer['heart_rate']),
        ],
        'respiratory_rate' => [
          'data' => $buffer['respiratory_rate'],
          'units' => 'rpm',
          'count' => count($buffer['respiratory_rate']),
        ],
      ];
    }
}
