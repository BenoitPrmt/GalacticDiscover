<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class LukeSkywalker extends Monster
{
  public function name(): string
  {
    return "LukeSkywalker";
  }
  public function description(): string
  {
    return "It's Your Choice, But I Warn You Not To Underestimate My Powers.";
  }
  public function level(): int
  {
    return 70;
  }
  public function health_points(): int
  {
    return 85;
  }
  public function defense(): int
  {
    return 65;
  }
  public function experience(): int
  {
    return 40;
  }
  public function skills(): array
  {
    return [
      "attack" => 4
    ];
  }
}
