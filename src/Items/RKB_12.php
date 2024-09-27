<?php

namespace GalacticDiscover\Items;

use Jugid\Staurie\Game\Item_Equippable;

class RKB_12 extends Item_Equippable
{
  public function name(): string
  {
    return "RKB_12";
  }
  public function description(): string
  {
    return "Boop Beep";
  }
  public function body_part(): string
  {
    return "shoulders";
  }
  public function statistics(): array
  {
    return [
      'damages' => 0,
      'defense' => 0,
      'range' => 0
    ];
  }
}
