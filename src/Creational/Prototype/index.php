<?php

namespace Kevocde\PhpDesignPatterns\Creational\Prototype;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Kevocde\PhpDesignPatterns\Creational\Prototype\Mission;

// Client
$mission = new Mission('Apollo 11', 7);
$armstrong = new Astronaut('Buzz Aldrin', $mission);

// Clone a Armstrong to create a new astronaut
$aldrin = clone $armstrong;
$aldrin->setName('Neil Armstrong');
$aldrin->getMission()->setName('Gemini');

echo $armstrong->getMission()->getName() . PHP_EOL; // Apollo 11
echo $aldrin->getMission()->getName() . PHP_EOL; // AGemini
