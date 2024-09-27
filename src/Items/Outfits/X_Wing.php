<?php

namespace GalacticDiscover\Items\Outfits;

use Jugid\Staurie\Game\Item_Equippable;

class X_Wing extends Item_Equippable
{
  public function name(): string
  {
    return "X-WingOutfit";
  }
  public function description(): string
  {
    return "X-Wing suit.";
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
