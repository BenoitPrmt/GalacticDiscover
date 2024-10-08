<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Items\Outfits\X_Wing;
use GalacticDiscover\Monsters\DarthVader;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Yavin4 extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(x: 0, y: 7);
  }

  public function name(): string
  {
    return 'Yavin4';
  }

  public function description(): string
  {
    return "Yavin 4, also known as Yavin, was the jungle-covered fourth moon in orbit around the red gas giant Yavin Prime. Prior to and during the Galactic Civil War, it hosted the headquarters of the Alliance to Restore the Republic, a group of resistance fighters that opposed the dominant Galactic Empire.";
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
    return [new X_Wing()];
  }

  public function monsters(): array
  {
    return [new DarthVader()];
  }
}
