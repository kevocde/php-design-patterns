<?php

namespace Kevocde\PhpDesignPatterns\Creational\FactoryMethod;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Kevocde\PhpDesignPatterns\Creational\FactoryMethod\Factories\RockyPlanetFactory;

$rockyPlanetFactory = new RockyPlanetFactory();

// Create a new rocky planet
$earthPlanet = $rockyPlanetFactory->createPlanet();
$earthPlanet->setName('Earth');
$earthPlanet->setOrbitalVelocity(29.78);
$earthPlanet->setRotationVelocity(0.99726968);

$earthPlanet->orbit();
$earthPlanet->rotate();

// Create a new rocky planet
$marsPlanet = $rockyPlanetFactory->createPlanet();
$marsPlanet->setName('Mars');
$marsPlanet->setOrbitalVelocity(24.077);
$marsPlanet->setRotationVelocity(1.02595676);

$marsPlanet->orbit();
$marsPlanet->rotate();

// Collect the planets
$newPlanet = $earthPlanet->collect($marsPlanet);
$newPlanet->orbit();
$newPlanet->rotate();

