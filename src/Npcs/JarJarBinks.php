<?php

namespace GalacticDiscover\Npcs;

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
    return "Here he comes! Blurk-Blurk-Blurk";
  }
}
