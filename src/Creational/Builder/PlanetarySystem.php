<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder;

use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\AAstro;

class PlanetarySystem {
  /**
   * Define the id of the planetary system
   *
   * @var string
   */
  protected string $id;

  /**
   * Define the stars of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $stars = [];

  /**
   * Define the planets of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $planets = [];

  /**
   * Define the satellites of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $satellites = [];

  /**
   * Define the comets of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $comets = [];

  /**
   * Define the asteroids of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $asteroids = [];

  public function __construct(string $id) {
    $this->id = $id;
  }

  public function addStart(AAstro $star): void {
    $this->stars = self::addAstro($this->stars, $star);
  }

  public function addPlanet(AAstro $planet): void {
    $this->planets = self::addAstro($this->planets, $planet);
  }

  public function addSatellite(AAstro $satelite): void {
    $this->satellites = self::addAstro($this->satellites, $satelite);
  }

  public function addComet(AAstro $comet): void {
    $this->comets = self::addAstro($this->comets, $comet);
  }

  public function addAsteroid(AAstro $asteroid): void {
    $this->asteroids = self::addAstro($this->asteroids, $asteroid);
  }

  public static function addAstro(array $astros, AAstro $astro): array {
    foreach ($astros as $current_astro) {
      if ($current_astro->getId() === $astro->getId()) {
        throw new \Exception('The astro already exists in the planetary system');
      }
    }
    $astros[] = $astro;

    return $astros;
  }

  /**
   * Converts an array of astros to string
   *
   * @param array[AAstros] $astros
   * @return string
   */
  public static function toStringAstros(array $astros): string {
    $pieces = [];
    foreach ($astros as $astro) {
      $pieces[] = $astro->getId();
    }

    return implode(', ', $pieces);
  }

  public function __toString() {
    return <<<PHP_EOL
Planetary System: {$this->id}
Stars: {$this->toStringAstros($this->stars)}
Planets: {$this->toStringAstros($this->planets)}
Satellites: {$this->toStringAstros($this->satellites)}
Comets: {$this->toStringAstros($this->comets)}
Asteroids: {$this->toStringAstros($this->asteroids)}

PHP_EOL;
  }
}
