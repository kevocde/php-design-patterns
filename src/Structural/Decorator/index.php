<?php

namespace Kevocde\PhpDesignPatterns\Structural\Decorator;

require_once __DIR__ . '/../../../vendor/autoload.php';

// Create a weapon
$weapon = new Weapons\PhotonTorpedo(10, 0.5, 1.5);
$weapon->shoot();

echo "\n";

// Add a power amplifier
$weapon_amplified = new Weapons\Decorators\PowerAmplifier($weapon);
$weapon_amplified->shoot();
