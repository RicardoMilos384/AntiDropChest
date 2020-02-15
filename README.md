 AntiDropChest
Plugin For Cancel Break Chest Of chest have item

- **EventListener**
```php
public function onBreak(BlockBreakEvent $event) {
        $chestTile = $event->getBlock()->getLevel()->getTile($event->getBlock());
        if($chestTile instanceof \pocketmine\tile\Chest && count($chestTile->getInventory()->getContents()) > 0)
        $event->setCancelled();
```php

## Credits

- EventListener from PMMP Forums (i forget the name :( )
