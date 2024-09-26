<?php

namespace GalacticDiscover\Items;

use Jugid\Staurie\Game\Item_Equippable;

class ShoulderBlaster extends Item_Equippable
{
  public function name(): string
  {
    return "Shoulder-Blaster";
  }
  public function description(): string
  {
    return "Be careful it's dangerous";
  }
  public function body_part(): string
  {
    return "hand";
  }
  public function statistics(): array
  {
    return [
      'damages' => 3,
      'defense' => 0,
      'range' => 2
    ];
  }
}
