<?php

namespace GalacticDiscover\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Force extends Item_Equippable
{
  public function name(): string
  {
    return "Force";
  }
  public function description(): string
  {
    return "May the Force be with you.";
  }
  public function body_part(): string
  {
    return "hand";
  }
  public function statistics(): array
  {
    return [
      'damages' => 3,
      'defense' => 2,
      'range' => 4
    ];
  }
}
