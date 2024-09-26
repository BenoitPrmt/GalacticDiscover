<?php
namespace GalacticDiscover\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map2 extends Blueprint {
    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,8);
    }

    public function name() : string {
        return 'Test';
    }

    public function description() : string {
        return 'This is a test map. This is a description where you can set a context element for users';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}
