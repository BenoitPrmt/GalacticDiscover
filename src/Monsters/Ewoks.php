<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class Ewoks extends Monster
{
  public function name(): string
  {
    return "Ewoks";
  }
  public function description(): string
  {
    return "Coatee-cha tu yub nub !";
  }
  public function level(): int
  {
    return 20;
  }
  public function health_points(): int
  {
    return 10;
  }
  public function defense(): int
  {
    return 5;
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
