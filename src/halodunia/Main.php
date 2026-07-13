<?php

namespace halodunia;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
    protected function onEnable() : void {
        $this->getLogger()->info(TextFormat::GREEN . "Plugin HaloDunia Aktif!");
    }
}
