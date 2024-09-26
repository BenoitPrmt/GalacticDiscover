<?php

namespace GalacticDiscover\Npcs;

use Jugid\Staurie\Game\Npc;

class LukeSkywalker extends Npc
{
  public function name(): string
  {
    return "LukeSkywalker";
  }
  public function description(): string
  {
    return "It's Your Choice, But I Warn You Not To Underestimate My Powers.";
  }
  public function speak(): string|array
  {
    return "Welcome here!";
  }
}
