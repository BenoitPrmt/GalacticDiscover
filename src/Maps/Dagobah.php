<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Npcs\Yoda;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Dagobah extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(x: 0, y: 6);
  }

  public function name(): string
  {
    return 'Dagobah';
  }

  public function description(): string
  {
    return 'Dagobah was a remote, unexplored planet in the Dagobah system, and one of the purest places in the galaxy within the Force.';
  }

  public function position(): Position
  {
    return $this->position;
  }

  public function npcs(): array
  {
    $character = $this->container->getCharacter();
    if ($character->statistics->value('side (0: Dark Side | 100: Light Side)') >= 50) {
      return [new Yoda()];
    }
    return [];
  }

  public function items(): array
  {
    return [];
  }

  public function monsters(): array
  {
    return [];
  }
}
