<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder;

use Kevocde\PhpDesignPatterns\Creational\Builder\Astros\AAbstro;

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
  protected array $stars;

  /**
   * Define the planets of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $planets;

  /**
   * Define the satellites of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $satellites;

  /**
   * Define the comets of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $comets;

  /**
   * Define the asteroids of the planetary system
   *
   * @var array[AAbstro]
   */
  protected array $asteroids;

  public function __construct(string $id) {
    $this->id = $id;
  }

  public function addStart(AAbstro $star): void {
    $this->stars = self::addAstro($this->stars, $star);
  }

  public function addPlanet(AAbstro $planet): void {
    $this->planets = self::addAstro($this->planets, $planet);
  }

  public function addSatellite(AAbstro $satelite): void {
    $this->satellites = self::addAstro($this->satellites, $satelite);
  }

  public function addComet(AAbstro $comet): void {
    $this->comets = self::addAstro($this->comets, $comet);
  }

  public function addAsteroid(AAbstro $asteroid): void {
    $this->asteroids = self::addAstro($this->asteroids, $asteroid);
  }

  public static function addAstro(array $astros, AAbstro $astro): array {
    foreach ($astros as $astro) {
      if ($astro->getId() === $astro->getId()) {
        throw new \Exception('The astro already exists in the planetary system');
      }
    }
    $astros[] = $astro;

    return $astros;
  }
}
