<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Monsters\TheMandalorian;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Endor extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(x: 0, y: 2);
  }

  public function name(): string
  {
    return 'Endor';
  }

  public function description(): string
  {
    return 'Endor, designated IX3244-A, also known as the Forest Moon of Endor or the Sanctuary Moon, was a small forested moon that was the ninth moon that orbited the Outer Rim planet of the same name.';
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