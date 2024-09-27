<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Monsters\TheMandalorian;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Naboo extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(x: 0, y: 3);
  }

  public function name(): string
  {
    return 'Naboo';
  }

  public function description(): string
  {
    return 'Naboo was a bountiful planet in the Chommell sector of the Mid Rim, in the Trailing Sectors and close to the border of the Outer Rim Territories. It was home to the indigenous Gungan species and to a population of humans known as the Naboo.';
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
