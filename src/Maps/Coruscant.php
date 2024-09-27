<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Monsters\TheMandalorian;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Coruscant extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(x: 0, y: 4);
  }

  public function name(): string
  {
    return 'Coruscant';
  }

  public function description(): string
  {
    return "Coruscant (pronounced /'kɔɹəsɑnt/), also known as Jewel of the Core Worlds, or Imperial Center during the rule of the Galactic Empire, was an ecumenopolis—a city-covered planet, collectively known as Imperial City— in the Coruscant system of the Core Worlds.";
  }

  public function position(): Position
  {
    return $this->position;
  }

  public function npcs(): array
  {
    return [];
  }

  public function items(): array
  {
    return [];
  }

  public function monsters(): array
  {
    return [new TheMandalorian()];
  }
}
