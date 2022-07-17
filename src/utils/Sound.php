<?php

declare(strict_types=1);

namespace creeperplayer20\SkyBlock\utils;

use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\player\Player;
use pocketmine\math\Vector3;

class Sound {
  
    public static function PlaySound($player, $soundName) {
        $packet = new PlaySoundPacket();
        $packet->soundName = "$soundName";
        $packet->x = $player->getPosition()->getX();
        $packet->y = $player->getPosition()->getY();
        $packet->z = $player->getPosition()->getZ();
        $packet->volume = 90;
        $packet->pitch = 1;
        $player->getNetworkSession()->sendDataPacket($packet);
    }
}
