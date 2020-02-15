# AntiDropChest
Plugin For Cancel Break Chest Of chest have item

## EventListener

PHP:
'public function onBreak(BlockBreakEvent $event) {
        $chestTile = $event->getBlock()->getLevel()->getTile($event->getBlock());
        if($chestTile instanceof \pocketmine\tile\Chest && count($chestTile->getInventory()->getContents()) > 0)
        $event->setCancelled();
    }'
