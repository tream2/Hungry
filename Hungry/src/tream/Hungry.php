<?php

namespace tream;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\entity\Human;

class Hungry extends PluginBase implements Listener {
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if($command->getName () == "밥"){
        	$sender->sendMessage("[ 밥 ] 배고픔을 채웠습니다.");
      	    $sender->setFood(20);
      	    return true;
        }
    }
}