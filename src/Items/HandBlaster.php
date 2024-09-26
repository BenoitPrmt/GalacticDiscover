<?php

namespace GalacticDiscover\Items;
use Jugid\Staurie\Game\Item_Equippable;

class HandBlaster extends Item_Equippable {
    public function name() : string {
        return "Hand-Blaster";
    }
    public function description(): string {
        return "Careful it's hurt";
    }
    public function body_part(): string {
        return "hand";
    }
    public function statistics(): array {
        return [
            'damages'=> 2,
            'defense'=> 0,
            'range' => 2
        ];
    }
}