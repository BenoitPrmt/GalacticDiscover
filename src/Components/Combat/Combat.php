<?php

namespace GalacticDiscover\Components\Combat;

use GalacticDiscover\Components\Combat\Functions\FightFunction;
use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;

class Combat extends AbstractComponent {
    public function getEventName(): array {
        return ["combat.begin"];
    }
    protected function action(string $event, array $arguments): void {
        switch ($event) {
            case "combat.begin":
                $this->begin($arguments[0]);
                break;
        }
    }

    private function begin(string $monsterName): void
    {
        $pp = $this->container->getPrettyPrinter();
        $pp->writeLn('Début du combat contre' . $monsterName, 'red');
    }
    public function name(): string {
        return "combat";
    }
    public function defaultConfiguration(): array {
        return [];
    }
    public function initialize(): void {
        $console = $this->container->getConsole();
        $console->addFunction(new FightFunction());
    }
    final public function require() : array {
        return [PrettyPrinter::class, MainCharacter::class];
    }
}