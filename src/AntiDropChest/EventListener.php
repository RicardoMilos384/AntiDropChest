<?php

namespace AntiDropChest;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;

class EventListener implements Listener {
    
    public function onBreak(BlockBreakEvent $event) {
        $chestTile = $event->getBlock()->getLevel()->getTile($event->getBlock());
        if($chestTile instanceof \pocketmine\tile\Chest && count($chestTile->getInventory()->getContents()) > 0)
        $event->setCancelled();
    }
}
