<?php

namespace Syams255;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\utils\Listener;
use pocketmine\level\Level;
use pocketmine\level\Positiom;
use pocketmine\math\Vector3;
use pocketmine\Player;
use Pocketmine\Server;
use pocketmine\block\Block;

class AntiFly extends PluginBase Implements Listener {
   
   public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
     $this->getLogger()->info("Enabled");
   }
   
   public function PlayerMove(PlayerMoveEvent $event){  
       $player = $event->getPlayer();
       $beneath = $event->getPlayer()->getLevel()->getBlock($event->getPlayer()->floor()->subtract(0, 1));
        if($beneath->getId() === 0)) {
        $player->sendMessage("Are you flying ? or You Hack ? Please Turn Off Your HackClient Or You Get Banned");
        }
    }
}
