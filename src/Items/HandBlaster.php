<?php

namespace GalacticDiscover\Items;
use Jugid\Staurie\Game\Item_Equippable;

class HandBlaster extends Item_Equippable {
    public function name() : string {
        return "Blaster-de-poing";
    }
    public function description(): string {
        return "Attention ça fait mal";
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