<?php
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER

$staurie= new Staurie('MUD');
$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);
$staurie->run(); //LANCE LE JEU