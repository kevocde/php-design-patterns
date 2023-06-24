<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Kevocde\PhpDesignPatterns\Structural\Adapter\Adapters\{BloodPressureAdapter, GlucometerAdapter, VitalSignsAdapter};
use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\BloodPressure;
use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\Glucometer;
use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\VitalSigns;

use Symfony\Component\Console\Helper\ProgressBar;

$seconds = 10;
$bloodPressure = new BloodPressure();
$glucometer = new Glucometer();
$vitalSigns = new VitalSigns();

$bloodPressure->startMeasuring();
$glucometer->startMeasuring();
$vitalSigns->startMeasuring();

sleep($seconds);

$bloodPressure->stopMeasuring();
$glucometer->stopMeasuring();
$vitalSigns->stopMeasuring();

$data = array_merge(
  BloodPressureAdapter::getData($bloodPressure),
  GlucometerAdapter::getData($glucometer),
  VitalSignsAdapter::getData($vitalSigns)
);


for ($i = 0; $i < $seconds; $i++) {
  echo <<<EOT
  +------------------+------------------+

EOT;

  foreach ($data as $key => $unit) {
    $key = str_pad($key, 18, ' ');
    $value = str_pad($unit['data'][$i]['value'] . ' ' . $unit['units'], 18, ' ');
    echo <<<EOT
  |$key|$value|
  +------------------+------------------+

EOT;
  }

  sleep(1);
  system('clear');
}
