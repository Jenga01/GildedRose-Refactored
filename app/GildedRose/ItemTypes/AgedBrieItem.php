<?php


namespace App\GildedRose\ItemTypes;


use App\GildedRose\Item;
use App\GildedRose\Item_Interface;

class AgedBrieItem extends Item implements Item_Interface
{
    const max_item_quality = 50;
    const quality_increase_before = 2;
    const quality_increase_after = 4;

    public function updateQuality()
    {

        if ($this->sell_in > 0) {
            $this->quality += self::quality_increase_before;
        } else {
            $this->quality += self::quality_increase_after;
        }

        if ($this->quality > self::max_item_quality) {
            $this->quality = self::max_item_quality;
        }

    }
}
