<?php

namespace SwordModded\Swords;

use SwordModded\Main;
use pocketmine\item\TieredTool;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;
use pocketmine\item\Tool;
use pocketmine\item\ItemIds;
use pocketmine\item\Sword;
use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\block\BlockToolType;

class GoldenSword extends Sword
{
    public function __construct(int $meta = 0)
    {
        parent::__construct(new ItemIdentifier(ItemIds::GOLDEN_SWORD, $meta), $meta, ToolTier::GOLD());
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("golden_durability");
    }

    public function getAttackPoints() : int{
		return Main::getInstance()->getConfig()->get("golden_attack");
	}

    public function getBlockToolType() : int
    {
        return BlockToolType::SWORD;
    }

}