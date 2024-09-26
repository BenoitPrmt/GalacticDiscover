<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class DarthMaul extends Monster
{
  public function name(): string
  {
    return "DarthMaul";
  }
  public function description(): string
  {
    return "You may think I am evil. I am not. I am efficient.";
  }
  public function level(): int
  {
    return 50;
  }
  public function health_points(): int
  {
    return 50;
  }
  public function defense(): int
  {
    return 60;
  }
  public function experience(): int
  {
    return 65;
  }
  public function skills(): array
  {
    return [];
  }
}
