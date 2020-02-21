# AntiDropChest
Plugin For Cancel Break Chest Of chest have item

[![Poggit-CI](https://poggit.pmmp.io/ci.badge/RicardoMilos384/AntiDropChest/AntiDropChest/master)]


- **EventListener**
```php
public function onBreak(BlockBreakEvent $event) {
        $chestTile = $event->getBlock()->getLevel()->getTile($event->getBlock());
        if($chestTile instanceof \pocketmine\tile\Chest && count($chestTile->getInventory()->getContents()) > 0)
        $event->setCancelled();
```

## Credits

- EventListener from PMMP Forums
  - thanks for wolfdale

### Need Help

Help me to get Perfect name for this plugin :D
