<?php

namespace GalacticDiscover\Items;

use Jugid\Staurie\Game\Item_Equippable;

class JetPack extends Item_Equippable
{
  public function name(): string
  {
    return "JetPack";
  }
  public function description(): string
  {
    return "Ohh look! I'm flying.";
  }
  public function body_part(): string
  {
    return "back";
  }
  public function statistics(): array
  {
    return [
      'defense' => 3
    ];
  }
}
