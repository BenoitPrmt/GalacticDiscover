<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class DarthSidious extends Monster
{
  public function name(): string
  {
    return "DarthSidious";
  }
  public function description(): string
  {
    return "Do it!";
  }
  public function level(): int
  {
    return 85;
  }
  public function health_points(): int
  {
    return 85;
  }
  public function defense(): int
  {
    return 30;
  }
  public function experience(): int
  {
    return 100;
  }
  public function skills(): array
  {
    return [
      "attack" => 1
    ];
  }
}
