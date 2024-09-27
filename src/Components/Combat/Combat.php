<?php

namespace GalacticDiscover\Components\Combat;

use GalacticDiscover\Components\Combat\Functions\FightFunction;
use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Character\Statistics;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Game\Monster;

class Combat extends AbstractComponent {
    public function getEventName(): array {
        return ["combat.begin"];
    }
    protected function action(string $event, array $arguments): void {
        switch ($event) {
            case "combat.begin":
                $this->begin($arguments['monster']);
                break;
        }
    }

    private function begin(string $monsterName): void
    {
        $pp = $this->container->getPrettyPrinter();
        $character = $this->container->getCharacter();

        if (!$character->statistics->has('damages')) {
            $pp->writeLn("You can't fight with no equipment !", 'white', 'red');
            return;
        }

        $pp->write($character->name, 'green');
        $pp->write(' VS ');
        $pp->writeLn($monsterName, 'red');


        $map = $this->container->getMap();
        $enemy = null;
        foreach($map->getCurrentBlueprint()->getMonsters() as $monster) {
            if(!$monster instanceof Monster) {
                continue;
            }
            if ($monster->name() === $monsterName) {
                $enemy = [
                    'name' => $monster->name(),
                    'description' => $monster->description(),
                    'level' => $monster->level(),
                    'hp' => $monster->health_points(),
                    'skills' => $monster->skills(),
                    'defense' => $monster->defense()
                ];
                break;
            }
        }

        $userHpTotal = $character->statistics->value('hp');
        $userHp = $userHpTotal;
        $enemyHpTotal = $enemy['hp'];
        $enemyHp = $enemyHpTotal;

        $round = 1;
        while ($userHp > 0 or $enemyHp > 0) {
            $pp->writeSeparator(centered: true);
            $pp->writeLn("ROUND N°" . $round, centered: true);

            $roundAttackers = [
                [
                    'attacker' => [
                        'name' => $character->name,
                        'damage' => $character->statistics->value('damages') * 20
                    ],
                    'victim' => [
                        'name' => $monsterName,
                        'defense' => $enemy['defense'],
                        'hp' => &$enemyHp,
                        'totalHp' => $enemyHpTotal
                    ]
                ],
                [
                    'attacker' => [
                        'name' => $monsterName,
                        'damage' => $enemy['skills']['attack'] * 20
                    ],
                    'victim' => [
                        'name' => $character->name,
                        'defense' => $character->statistics->value('defense'),
                        'hp' => &$userHp,
                        'totalHp' => $userHpTotal
                    ]
                ]
            ];

            foreach ($roundAttackers as $roundTurn) {
                $pp->writeSeparator(centered: true);
                $pp->writeLn($roundTurn['attacker']['name'] . " is attacking...", 'white', 'red');

                $attackerDamage = $roundTurn['attacker']['damage'];
                $victimDefense = $roundTurn['victim']['defense'];
                $damageOnVictim = ($attackerDamage - $victimDefense) > 0 ? $attackerDamage - $victimDefense : 0;

                if ($damageOnVictim === 0) {
                    $pp->writeLn($roundTurn['victim']['name'] . " has protected himself and took 0 HP");
                } else {
                    $roundTurn['victim']['hp'] -= $damageOnVictim;
                    $roundTurn['victim']['hp'] = max($roundTurn['victim']['hp'], 0);

                    $pp->writeLn($roundTurn['attacker']['name'] . "hit and remove " . $damageOnVictim . "HP to " . $roundTurn['victim']['name']);
                }
                $pp->writeProgressbar($roundTurn['victim']['hp'], max: $roundTurn['victim']['totalHp']);
            }
            // TODO: check end condition
            $round++;
        }
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