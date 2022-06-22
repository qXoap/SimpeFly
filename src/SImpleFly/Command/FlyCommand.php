<?php

namespace SimpleFly\Command;

use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as T;
use pocketmine\Server;

class FlyCommand extends Command {

    public function __construct()
    {
        parent::__construct("fly", "Fly On\Off", null, []);
    }

    public function execute(CommandSender $pl, string $commandLabel, array $args)
    {
        if($pl instanceof Player){
            if(!$pl->hasPermission("fly.cmd")){
                return false;
            }
            if(!isset($args[0])){
                $pl->sendMessage(T::RED."Usage /fly [on:off]");
                return false;
            }
            switch(strtolower($args[0])){
                case "on":
                    $pl->setAllowFlight(true);
                    $pl->setFlying(true);
                    $pl->sendTip(T::GREEN."Fly On");
                break;
                case "off":
                    $pl->setAllowFlight(false);
                    $pl->setFlying(false);
                    $pl->sendTip(T::GREEN."Fly Off");
                break;
                
                default:
                $pl->sendMessage(T::RED."Usage /fly [on:off]");
            }
        }else{

        }
    }
}