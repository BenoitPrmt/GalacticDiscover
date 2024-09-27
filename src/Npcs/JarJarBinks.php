<?php

namespace GalacticDiscover\Npcs;

use GalacticDiscover\Items\HandBlaster;
use Jugid\Staurie\Game\Npc;

class JarJarBinks extends Npc
{
  public function name(): string
  {
    return "JarJarBinks";
  }
  public function description(): string
  {
    return "Misa clumsy.";
  }
  public function speak(): string|array
  {
    while (!$this->playerHasItem('Hand-Blaster')) {
      $this->giveItem(new HandBlaster());
    };
    return "Here he comes! Blurk-Blurk-Blurk";
  }
}
