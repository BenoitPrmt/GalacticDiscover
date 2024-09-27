<?php

namespace GalacticDiscover\Items\Outfits;

use Jugid\Staurie\Game\Item_Equippable;

class Jedi extends Item_Equippable
{
  public function name(): string
  {
    return "JediOutfit";
  }
  public function description(): string
  {
    return "Old sheet";
  }
  public function body_part(): string
  {
    return "outfit";
  }
  public function statistics(): array
  {
    return [
      'defense' => 0
    ];
  }
}
