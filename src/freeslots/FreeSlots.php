<?php

declare(strict_types=1);

namespace freeslots;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class FreeSlots extends PluginBase implements Listener {
  
  public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
  }

public function onQuery(QueryRegenerateEvent $event): void {
    $currentPlayers = $this->getServer()->getOnlinePlayers();
    $event->setMaxPlayerCount(count($currentPlayers) + 1);
  }
}
