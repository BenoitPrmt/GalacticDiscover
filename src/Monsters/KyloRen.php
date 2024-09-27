<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class KyloRen extends Monster
{
  public function name(): string
  {
    return "KyloRen";
  }
  public function description(): string
  {
    return "I can show you the Power of the dark side.";
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
