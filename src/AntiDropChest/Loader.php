<?php

namespace AntiDropChest;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\Level;

class Loader extends PluginBase {
    
    public function onEnable() {
        $this->getLogger()->info("[AntiDropChest] §aEnable");
        $listener = new EventListener($this);
		$this->getServer()->getPluginManager()->registerEvents($listener, $this);
    }
}
