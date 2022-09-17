<?php

namespace KaxYum-AethTeam\SwordModded\Swords;

use KaxYum-AethTeam\SwordModded\Main;
use pocketmine\item\TieredTool;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;
use pocketmine\item\Tool;
use pocketmine\item\ItemIds;
use pocketmine\item\Sword;
use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\block\BlockToolType;

class DiamondSword extends Sword
{
    public function __construct(int $meta = 0)
    {
        parent::__construct(new ItemIdentifier(ItemIds::DIAMOND_SWORD, $meta), $meta, ToolTier::DIAMOND());
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("diamond_durability");
    }

    public function getAttackPoints() : int{
		return Main::getInstance()->getConfig()->get("diamond_attack");
	}

    public function getBlockToolType() : int
    {
        return BlockToolType::SWORD;
    }

}
