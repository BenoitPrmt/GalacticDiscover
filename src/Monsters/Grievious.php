<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class Grievious extends Monster
{
  public function name(): string
  {
    return "Grievious";
  }
  public function description(): string
  {
    return "Your lightsaber would make a fine addition to my collection.";
  }
  public function level(): int
  {
    return 60;
  }
  public function health_points(): int
  {
    return 60;
  }
  public function defense(): int
  {
    return 40;
  }
  public function experience(): int
  {
    return 50;
  }
  public function skills(): array
  {
    return [];
  }
}
