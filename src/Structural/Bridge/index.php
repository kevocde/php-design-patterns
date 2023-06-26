<?php

namespace Kevocde\PhpDesignPatterns\Structural\Bridge;

require_once __DIR__ . '/../../../vendor/autoload.php';

$human_ui = new UI\HumanInterface();
$android_ui = new UI\AndroidInterface();

$drive_module = new Modules\DriveModule(['max_warp' => '4'], $human_ui);
$drive_module->enable();
$drive_module->disable();
$drive_module->getParameters();

$drive_module->changeUI($android_ui);
$drive_module->enable();
$drive_module->disable();
$drive_module->getParameters();
