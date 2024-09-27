<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class TheMandalorian extends Monster
{
  public function name(): string
  {
    return "TheMandalorian";
  }
  public function description(): string
  {
    return "I can bring you in warm, or I can bring you in cold";
  }
  public function level(): int
  {
    return 65;
  }
  public function health_points(): int
  {
    return 70;
  }
  public function defense(): int
  {
    return 65;
  }
  public function experience(): int
  {
    return 50;
  }
  public function skills(): array
  {
    return [
      "attack" => 2
    ];
  }
}
