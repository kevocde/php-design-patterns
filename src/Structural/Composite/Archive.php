<?php

namespace Kevocde\PhpDesignPatterns\Structural\Composite;

interface Archive {
  /**
   * Returns in bytes the total size of the archive.
   * @return int
   */
  public function getSize(): int;

  /**
   * Change dynamically the location of the archive.
   * @param string $location
   * @return void
   */
  public function moveLocation(string $location): void;
}