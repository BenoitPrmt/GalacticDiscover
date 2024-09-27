<?php

namespace GalacticDiscover\Items\Outfits;

use Jugid\Staurie\Game\Item_Equippable;

class Mandalorian extends Item_Equippable
{
  public function name(): string
  {
    return "MandalorianOutfit";
  }
  public function description(): string
  {
    return "Made from beskar";
  }
  public function body_part(): string
  {
    return "outfit";
  }
  public function statistics(): array
  {
    return [
      'defense' => 4
    ];
  }
}
