<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\BloodPressure;
use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\Glucometer;
use Kevocde\PhpDesignPatterns\Structural\Adapter\Meters\VitalSigns;

$bloodPressure = new BloodPressure();
$glucometer = new Glucometer();
$vitalSigns = new VitalSigns();

$bloodPressure->startMeasuring();
$glucometer->startMeasuring();
$vitalSigns->startMeasuring();

sleep(10);

$bloodPressure->stopMeasuring();
$glucometer->stopMeasuring();
$vitalSigns->stopMeasuring();

print_r($bloodPressure->getData());
print_r($glucometer->getData());
print_r($vitalSigns->getData());

$bloodPressure->reset();
$glucometer->reset();
$vitalSigns->reset();

