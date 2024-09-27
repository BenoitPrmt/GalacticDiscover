<?php

namespace GalacticDiscover\Items\Outfits;

use Jugid\Staurie\Game\Item_Equippable;

class DeathTrooper extends Item_Equippable
{
  public function name(): string
  {
    return "DeathTrooper";
  }
  public function description(): string
  {
    return "DeathTrooper Outfit.";
  }
  public function body_part(): string
  {
    return "outfit";
  }
  public function statistics(): array
  {
    return [
      'defense' => 3.5
    ];
  }
}
