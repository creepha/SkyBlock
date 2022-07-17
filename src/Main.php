<?php

declare(strict_types=1);

namespace creeperplayer20\SkyBlock;

use creeperplayer20\JoinUI\jojoe77777\FormAPI\SimpleForm;
use pocketmine\player\Player;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements listener {

    public function onEnable() : void {

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
   
    }

    public function onCommand(
        CommandSender $player,
        Command       $cmd,
        string        $label,
        array         $args
    ) : bool
    {

        if($cmd->getName() == "skyblock"){

            $worldName = $player->getName();
            
            if(isset($args[0])){
                switch ($args[0]) {
                    case 'menu':
                          //if() & form
                        break;
                    
                    default:
                        //help form
                        break;
                }
            }
        }
        return true;
    }
}
