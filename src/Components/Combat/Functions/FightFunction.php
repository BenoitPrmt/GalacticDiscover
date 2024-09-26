<?php

namespace GalacticDiscover\Components\Combat\Functions;

use Jugid\Staurie\Component\Console\AbstractConsoleFunction;

class FightFunction extends AbstractConsoleFunction {

    public function action(array $args): void
    {
        $this->getContainer()->dispatcher()->dispatch('combat.begin', ['monster' => $args[0]]);
    }

    public function getArgs(): int|array
    {
        return 1;
    }

    public function name(): string
    {
        return "fight";
    }

    public function description(): string
    {
        return "Fight enemies";
    }
}