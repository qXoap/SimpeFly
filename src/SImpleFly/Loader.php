<?php

namespace SimpleFly;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;

use SimpleFly\Command\FlyCommand;

class Loader extends PluginBase {

    public function onEnable(): void{
        $this->getServer()->getCommandMap()->register("fly", new FlyCommand());
        $this->getLogger()->info("Fly Enabled");
    }
}