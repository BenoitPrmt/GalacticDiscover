<?php

namespace GalacticDiscover\Npcs;

use Jugid\Staurie\Game\Npc;

class ObiWanKenobi extends Npc
{
  public function name(): string
  {
    return "ObiWanKenobi";
  }
  public function description(): string
  {
    return "The truth is often what we make of it.";
  }
  public function speak(): string|array
  {
    return "Hello there!";
  }
}
