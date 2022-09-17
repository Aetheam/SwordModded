<?php

namespace KaxYum-AethTeam\SwordModded;

use KaxYum-AethTeam\SwordModded\Swords\DiamondSword;
use KaxYum-AethTeam\SwordModded\Swords\IronSword;
use KaxYum-AethTeam\SwordModded\Swords\WoodenSword;
use KaxYum-AethTeam\SwordModded\Swords\GoldenSword;
use KaxYum-AethTeam\SwordModded\Swords\StoneSword;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {

    private static $instance;

    private Config $config;

    public function onEnable(): void{
        self::$instance = $this;
        $this->getServer()->getPluginManager()->registerEvents($this, $this); 
        ItemFactory::getInstance()->register(new DiamondSword(),true);
        ItemFactory::getInstance()->register(new IronSword(),true);
        ItemFactory::getInstance()->register(new WoodenSword(),true);
        ItemFactory::getInstance()->register(new GoldenSword(),true);
        ItemFactory::getInstance()->register(new StoneSword(),true);
        @mkdir($this->getDataFolder());
        $this->saveResource("config.yml");
        $this->saveDefaultConfig();
        self::$instance = $this;
    }

    public static function getInstance(): Main{
        return self::$instance;
    }
}
