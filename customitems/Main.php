<?php

namespace customitems;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\Player;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandExecutor;
use onebone\economyapi\EconomyAPI;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
           if($cmd->getName() == "hc") {
              if($sender instanceof Player) {
                 if($sender->hasPermission("hc.use")) {
                 $inv = $sender->getInventory();
                 $item = Item::get(399, 0, 1);
                 $item->setCustomName->("Heart Crystal")
                 $item->setLore->[("Gain an extra heart!\nLose extra Hearts on death!")]
                 $sender->$inv->addItem($item);
                 $sender->sendMessage("You have recieved an Extra Heart Crystal");
                 }
              }else{
                $sender->sendMessage("No permission");
              }
           }
    return true;
    }

