<?php

namespace GalacticDiscover\Npcs;

use GalacticDiscover\Items\Force;
use Jugid\Staurie\Game\Npc;

class Yoda extends Npc
{
  public function name(): string
  {
    return "Yoda";
  }
  public function description(): string
  {
    return "Do or do not...there is no try.";
  }
  public function speak(): string|array
  {
    while (!$this->playerHasItem('Force')) {
      $this->giveItem(new Force());
    }
    return "Hello child";
  }
}
