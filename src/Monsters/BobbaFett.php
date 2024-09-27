<?php

namespace GalacticDiscover\Monsters;

use Jugid\Staurie\Game\Monster;

class BobbaFett extends Monster
{
  public function name(): string
  {
    return "BobbaFett";
  }
  public function description(): string
  {
    return "You are no good to me dead.";
  }
  public function level(): int
  {
    return 40;
  }
  public function health_points(): int
  {
    return 30;
  }
  public function defense(): int
  {
    return 50; //Counting the fact that he can espace
  }
  public function experience(): int
  {
    return 75;
  }
  public function skills(): array
  {
    return [
      "attack" => 1 //From 0 to 5
    ];
  }
}
