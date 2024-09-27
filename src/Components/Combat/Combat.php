<?php

namespace GalacticDiscover\Components\Combat;

use GalacticDiscover\Components\Combat\Functions\FightFunction;
use GalacticDiscover\Items\HeavyBlaster;
use GalacticDiscover\Items\JetPack;
use GalacticDiscover\Items\LaserSword;
use GalacticDiscover\Items\Outfits\Mandalorian;
use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\Character\MainCharacter;
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
                        'defense' => $enemy['defense'] * 20,
                        'hp' => &$enemyHp,
                        'totalHp' => $enemyHpTotal
                    ]
                ],
                [
                    'attacker' => [
                        'name' => $monsterName,
                        'damage' => $enemy['skills']['attack'] * 10
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

                    if ($roundTurn['victim']['hp'] <= 0) break;

                    $pp->writeLn($roundTurn['attacker']['name'] . " hit and remove " . $damageOnVictim . "HP to " . $roundTurn['victim']['name']);
                }
                $pp->writeProgressbar($roundTurn['victim']['hp'], max: $roundTurn['victim']['totalHp']);
            }

            if ($userHp <= 0 or $enemyHp <= 0) break;

            $round++;
        }

        if ($userHp <= 0) {
            $pp->writeLn("GAME OVER ! " . $monsterName . " killed " . $character->name . " in " . $round . " rounds", 'red');
            // TODO: Death message
        } else if ($enemyHp <= 0) {
            $pp->writeLn("VICTORY ! " . $character->name . " killed " . $monsterName . " in " . $round . " rounds", 'red');
            $character->statistics->add('hp', $userHpTotal - $userHp);
            $pp->write("Life: ");
            $pp->writeProgressbar($userHp, max: $userHpTotal);

            $monsterItemsToDrop = [
                "TheMandalorian" => [new LaserSword(), new Mandalorian()],
                "Bobafett" => [new JetPack()],
                "LukeSkywalker" => [new LaserSword()],
                "Dooku" => [new HeavyBlaster()]
            ];

            if (array_key_exists($monsterName, $monsterItemsToDrop)) {
                foreach ($monsterItemsToDrop[$monsterName] as $itemDrop) {
                    $this->container->dispatcher()->dispatch('inventory.give', ['item'=> $itemDrop]);
                    $pp->writeLn('You get ' . $itemDrop->name(), null, 'green');
                }
            }

            // TODO: GIVE XP TO USER WHEN VICTORY (check level formula)
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