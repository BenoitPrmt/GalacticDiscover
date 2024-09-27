<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class Dooku extends Monster
{
  public function name(): string
  {
    return "Dooku";
  }
  public function description(): string
  {
    return "I sense great fear in you. You have anger. But you don't use them.";
  }
  public function level(): int
  {
    return 40;
  }
  public function health_points(): int
  {
    return 65;
  }
  public function defense(): int
  {
    return 40;
  }
  public function experience(): int
  {
    return 40;
  }
  public function skills(): array
  {
    return [
      "attack" => 3
    ];
  }
}
