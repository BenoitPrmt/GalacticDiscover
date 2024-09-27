<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Monsters\DarthMaul;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Dathomir extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(x: 0, y: 5);
  }

  public function name(): string
  {
    return 'Dathomir';
  }

  public function description(): string
  {
    return "Dathomir, nicknamed the 'rancor planet,' was a remote, neutral and obscure planet in the Dathomir system of the Quelli sector in the Outer Rim Territories and New Territories of the galaxy. It was the homeworld of the Dathomirian subspecies of Zabraks.";
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
    $character = $this->container->getCharacter();
    if ($character->statistics->value('side (0: Dark Side | 100: Light Side)') >= 50) {
      return [new DarthMaul()];
    }
    return [];
  }
}
