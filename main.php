<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Character\Statistics;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;
use GalacticDiscover\Components\Combat\Combat;

require_once __DIR__ . '/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('Galactic Discover');
$staurie->register(
  [
    Console::class,
    PrettyPrinter::class,
    MainCharacter::class,
    Inventory::class,
    Level::class,
    Combat::class
  ]
);

$container = $staurie->getContainer();
$menu = $container->registerComponent(Menu::class);
$menu->configuration([
  'text' => 'Welcome to this awesome test adventure',
  'labels' => [
    'new_game' => 'Enter the world',
    'quit' => 'Exit game',
  ]
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
  'directory' => __DIR__ . '/src/Maps',
  'namespace' => 'GalacticDiscover\Maps'
]);

$charStats = new Statistics();
$charStats->addDefault('hp', default_value: 100);

$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
  'statistics' => $charStats,
  'equipment' => [
    'head' => null,
    'hand' => null,
    'shield' => null,
    'shoulders' => null,
    'back' => null,
    'outfit' => null,
  ]
]);

$staurie->run();
