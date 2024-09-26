<?php
namespace GalacticDiscover\Npcs;
use Jugid\Staurie\Game\Npc;
class Dooku extends Npc {
    public function name() : string {
        return "Dooku";
    }
    public function description() : string {
        return "Sith avec un sabre tordu...";
    }
    public function speak() : string|array {
        return "Hello !";
    }
}