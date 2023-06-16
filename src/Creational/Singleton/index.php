<?php

namespace Kevocde\PhpDesignPatterns\Creational\Singleton;

require_once __DIR__ . '/../../../vendor/autoload.php';

// Client
$object1 =  Singleton::getInstance();
$object2 =  Singleton::getInstance();

if ($object1 === $object2) {
  echo "Singleton works, both variables contain the same instance.";
} else {
  echo "Singleton failed, variables contain different instances.";
}
