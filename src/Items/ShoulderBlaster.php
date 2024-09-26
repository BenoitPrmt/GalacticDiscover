<?php

namespace GalacticDiscover\Items;
use Jugid\Staurie\Game\Item_Equippable;

class ShoulderBlaster extends Item_Equippable {
    public function name() : string {
        return "Blaster-d'épaule";
    }
    public function description(): string {
        return "Attention c'est dangereux";
    }
    public function body_part(): string {
        return "hand";
    }
    public function statistics(): array {
        return [
            'damages'=> 3,
            'defense'=> 0,
            'range' => 2
        ];
    }
}