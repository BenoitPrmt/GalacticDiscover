<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER

$staurie= new Staurie('Galactic Discover');
$staurie->register(
    [
        Console::class,
        PrettyPrinter::class,
        MainCharacter::class,
        Menu::class,
        Inventory::class,
        Level::class
    ]
);

$container= $staurie->getContainer();
$menu= $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Welcome to this awesome test adventure',
    'labels'=> [
        'new_game' => 'Enter the world',
        'quit'=> 'Exit game',
    ]
]);

$staurie->run();