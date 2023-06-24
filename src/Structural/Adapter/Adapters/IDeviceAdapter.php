<?php

namespace Kevocde\PhpDesignPatterns\Structural\Adapter\Adapters;

interface IDeviceAdapter {
  public static function getData($device): array;
}
