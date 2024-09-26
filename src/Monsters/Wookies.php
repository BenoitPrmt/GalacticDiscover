<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class Wookies extends Monster
{
  public function name(): string
  {
    return "Wookies";
  }
  public function description(): string
  {
    return "Uhrrrrr Aghrrrrr";
  }
  public function level(): int
  {
    return 40;
  }
  public function health_points(): int
  {
    return 60;
  }
  public function defense(): int
  {
    return 30;
  }
  public function experience(): int
  {
    return 20;
  }
  public function skills(): array
  {
    return [];
  }
}
