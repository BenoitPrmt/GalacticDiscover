<?php
namespace GalacticDiscover\Items;
use Jugid\Staurie\Game\Item_Equippable;

class LaserSword extends Item_Equippable {
    public function name() : string {
        return "Laser-Sword";
    }
    public function description(): string {
        return "Be careful, it's very sharp....";
    }
    public function body_part(): string {
        return "hand";
    }
    public function statistics(): array {
        return [
            'damages'=> 5,
            'defense'=> 2,
            'range' => 1
        ];
    }
}