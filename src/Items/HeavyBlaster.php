<?php

namespace GalacticDiscover\Items;
use Jugid\Staurie\Game\Item_Equippable;

class HeavyBlaster extends Item_Equippable {
    public function name() : string {
        return "Blaster-Lourd";
    }
    public function description(): string {
        return "Attention ça défouraille";
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