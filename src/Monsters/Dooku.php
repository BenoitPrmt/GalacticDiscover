<?php
namespace GalacticDiscover\Monsters;
use Jugid\Staurie\Game\Monster;

class Dooku extends Monster {
    public function name() : string {
        return "Dooku";
    }
    public function description(): string {
        return "Sith avec un sabre tordu...";
    }
    public function level() : int {
        return 1;
    }
    public function health_points(): int {
        return 10;
    }
    public function defense(): int {
        return 5;
    }
    public function experience(): int {
        return 20;
    }
    public function skills(): array {
        return [];
    }
}