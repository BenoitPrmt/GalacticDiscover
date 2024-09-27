<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class DarthVader extends Monster
{
  public function name(): string
  {
    return "DarthVader";
  }
  public function description(): string
  {
    return "You underestimate the power of the dark side.";
  }
  public function level(): int
  {
    return 100;
  }
  public function health_points(): int
  {
    return 80;
  }
  public function defense(): int
  {
    return 85;
  }
  public function experience(): int
  {
    return 85;
  }
  public function skills(): array
  {
    return [
      "attack" => 5
    ];
  }
}
