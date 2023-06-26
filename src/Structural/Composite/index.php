<?php

namespace Kevocde\PhpDesignPatterns\Structural\Composite;

require_once __DIR__ . '/../../../vendor/autoload.php';

$folder = new Folder('root', 'home', [
  new File('', 'file1.txt', 100),
  new File('', 'file2.txt', 200),
  new File('', 'file3.txt', 300),
]);

echo "Folder size: {$folder->getSize()} bytes\n";

$folder->add(new File('', 'file4.txt', 400));

echo "Folder size: {$folder->getSize()} bytes\n";

$folder->remove(new File('', 'file2.txt', 200));

echo "Folder size: {$folder->getSize()} bytes\n";

$folder->moveLocation('root2');
