<?php
namespace GalacticDiscover\Npcs;
use Jugid\Staurie\Game\Npc;

class Yoda extends Npc {
    public function name() : string {
        return "Yoda";
    }
    public function description() : string {
        return "Un grand maitre Jedi par l'esprit mais petit par la taille... Il a de grandes oreilles poilues";
    }
    public function speak() : string|array {
        return "Bonjour jeune Padawan !";
    }
}