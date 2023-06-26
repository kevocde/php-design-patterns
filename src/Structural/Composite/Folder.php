<?php

namespace Kevocde\PhpDesignPatterns\Structural\Composite;

class Folder implements Archive {
  protected string $location;
  protected string $name;

  /**
   * @var array[Archive] $items
   */
  protected array $items = [];

  public function __construct(string $location, string $name, array $items = []) {
    $this->location = $location;
    $this->name = $name;

    foreach ($items as $item) {
      $item->moveLocation($location . '/' . $this->name);
      $this->items[] = $item;
    }
  }

  public function add(Archive $item): void {
    $item->moveLocation($this->location . '/' . $this->name);
    $this->items[] = $item;
  }

  public function remove(Archive $item): void {
    $this->items = array_filter($this->items, function ($i) use ($item) {
      return $i->getName() !== $item->getName();
    });
  }

  /**
   * @inheritDoc
   */
  public function getSize(): int {
    $size = 0;
    foreach ($this->items as $item) {
      $size += $item->getSize();
    }

    return $size;
  }

  /**
   * @inheritDoc
   */
  public function moveLocation(string $location): void {
    $this->location = $location;
    foreach ($this->items as $item) {
      $item->moveLocation($location . '/' . $this->name);
    }
  }
}