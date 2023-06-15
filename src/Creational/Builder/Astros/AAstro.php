<?php

namespace Kevocde\PhpDesignPatterns\Creational\Builder\Astros;

abstract class AAbstro {
  const SUFIX = '';

  /**
   * Define the id of the astro
   *
   * @var string
   */
  protected string $id;

  /**
   * Define the position of the astro in the space
   *
   * @var array[float]
   */
  protected array $position = [0, 0, 0];

  /**
   * Define the rotation of the astro in the space
   *
   * @var array[float]
   */
  protected array $rotation = [0, 0, 0];

  /**
   * Define the elements of the astro
   *
   * @var array[float]
   */
  protected array $elements = [];

  public function __construct(string $id) {
    $this->id = $id . static::SUFIX;
  }

  public function getId(): string {
    return $this->id;
  }

  public function getMass(): float {
    return array_sum($this->elements);
  }

  public function setPosition(float $x, float $y, float $z): void {
    $this->position = [$x, $y, $z];
  }

  public function getPosition(): array {
    return $this->position;
  }

  public function setRotation(float $x, float $y, float $z): void {
    $this->rotation = [$x, $y, $z];
  }

  public function getRotation(): array {
    return $this->rotation;
  }

  public function setElements(array $elements): void {
    $this->elements = $elements;
  }

  public function getElements(): array {
    return $this->elements;
  }

  public function addElement(string $element, float $mass): void {
    if (!isset($this->elements[$element])) {
      $this->elements[$element] = 0;
    }

    $this->elements[$element] += $mass;
  }

  public function removeElement(string $element): void {
    if (isset($this->elements[$element])) {
      unset($this->elements[$element]);
    }
  }
}
