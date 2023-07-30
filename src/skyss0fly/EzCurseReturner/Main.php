<?php

namespace skyss0fly\EzCurseReturner;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\utils\TextFormat;

class SwearDetector implements Listener {
    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
    }
    
    public function onPlayerChat(PlayerChatEvent $event) {
        $player = $event->getPlayer();
        $message = $event->getMessage();
        if (strpos($message, "test") !== false) {
            $event->setCancelled();
            $this->plugin->getServer()->broadcastMessage(TextFormat::RED . $player->getName() " is talking about themselves!");
        }
    }
}
