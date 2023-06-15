<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder;

use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\AAbstro;

interface IPlanetarySystemBuilder {
  public function reset(string $id): void;
  public function addStar(AAbstro $star): void;
  public function addPlanet(AAbstro $planet): void;
  public function addSatellite(AAbstro $satellite): void;
  public function addComet(AAbstro $comet): void;
  public function addAsteroid(AAbstro $asteroid): void;
  public function make(): PlanetarySystem;
}