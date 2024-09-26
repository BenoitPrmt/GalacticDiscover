<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Monsters\TheMandalorian;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Mandalore extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(x: 0, y: 1);
  }

  public function name(): string
  {
    return 'Mandalore';
  }

  public function description(): string
  {
    return 'Mandalore, also known as Mand\'alor, was a planet located in the Outer Rim Territories. It was the homeworld of the Mandalorians, a fearsome warrior clan-based people, and the indigenous Alamite species. ';
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
