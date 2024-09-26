<?php
namespace GalacticDiscover\Maps;
use GalacticDiscover\Items\LaserSword;
use GalacticDiscover\Monsters\Dooku;
use GalacticDiscover\Npcs\Yoda;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
class TestMap extends Blueprint {
    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return 'Test map';
    }

    public function description() : string {
        return 'This is a test map. This is a description where you can set a context element for users';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new Yoda()];
    }

    public function items() : array {
        return [new LaserSword()];
    }

    public function monsters() : array {
        return [new Dooku()];
    }
}
