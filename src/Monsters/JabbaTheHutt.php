<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class JabbaTheHutt extends Monster
{
  public function name(): string
  {
    return "JabbaTheHutt";
  }
  public function description(): string
  {
    return "There will be no bargain, young jedi.";
  }
  public function level(): int
  {
    return 20;
  }
  public function health_points(): int
  {
    return 100;
  }
  public function defense(): int
  {
    return 10;
  }
  public function experience(): int
  {
    return 50;
  }
  public function skills(): array
  {
    return [
      "attack" => 1
    ];
  }
}
