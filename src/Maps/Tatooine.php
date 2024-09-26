<?php

namespace GalacticDiscover\Maps;

use GalacticDiscover\Items\HandBlaster;
use GalacticDiscover\Monsters\Dooku;
use GalacticDiscover\Npcs\JarJarBinks;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Tatooine extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(0, 0);
  }

  public function name(): string
  {
    return 'Tatooine';
  }

  public function description(): string
  {
    return 'Tatooine was a sparsely inhabited circumbinary desert planet located in the galaxy\'s Outer Rim Territories.';
  }

  public function position(): Position
  {
    return $this->position;
  }

  public function npcs(): array
  {
    return [new JarJarBinks()];
  }

  public function items(): array
  {
    return [new HandBlaster()];
  }

  public function monsters(): array
  {
    return [new Dooku()];
  }
}
