<?php

namespace GalacticDiscover\Items;
use Jugid\Staurie\Game\Item_Equippable;

class HeavyBlaster extends Item_Equippable {
    public function name() : string {
        return "Heavy-Turrets";
    }
    public function description(): string {
        return "Watch out, it's going wild!";
    }
    public function body_part(): string {
        return "hand";
    }
    public function statistics(): array {
        return [
            'damages'=> 5,
            'defense'=> 0,
            'range' => 3
        ];
    }
}